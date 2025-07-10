<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */

class Reservasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservasiModel'); // load model
	}

	public function index()
	{
		$data['reservasi'] = $this->reservasiModel->get_data_reservasi();
		$this->load->view('admin/data_reservasi/v_reservasi', $data);
	}



	public function tambah()
	{
		$this->load->database();
		$this->db->where('role', 'pasien');
		$data['pasien'] = $this->db->get('datauser')->result();

		$this->db->where('role', 'dokter');
		$data['dokter'] = $this->db->get('datauser')->result();

		$this->load->view('admin/data_reservasi/v_formresv', $data);
	}

	public function simpan()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('masuk');
		}

		$this->load->database();
		$tipe = $this->input->post('tipe_pasien', true);
		$jenis_reservasi = $this->input->post('jenis_reservasi', true) ?? $this->input->post('jenis_reservasiLama', true);
		$tgl = $this->input->post('tgl', true) ?? $this->input->post('tglLama', true);
		$jam = $this->input->post('waktu', true) ?? $this->input->post('waktuLama', true);
		$keluhan = $this->input->post('keluhan', true) ?? $this->input->post('keluhanLama', true);
		$dokter = $this->input->post('dokterLama', true);
		$rencana_perawatan = $this->input->post('rencanaPerawatan', true) ?? $this->input->post('rencanaPerawatanLama', true);

		if ($tipe == 'lama') {
			$id_pasien = $this->input->post('pasienLama', true);
		} else {
			// SIMPAN PASIEN BARU
			$id_user = $this->session->userdata('id_user');
			$this->db->insert('datapasien', [
				'id_user'     => $id_user,
				'nama'        => $this->input->post('namaLengkap', true),
				'tmpt_lahir'  => $this->input->post('tempat_lahir', true),
				'tgl_lahir'   => $this->input->post('tgl_lahir', true),
				'jk'          => $this->input->post('jenis_kelamin', true),
				'pekerjaan'   => $this->input->post('Pekerjaan', true),
				'status'      => $this->input->post('statusPernikahan', true),
				'alamat'      => $this->input->post('alamat', true),
				'no_hp'       => $this->input->post('noHp', true)
			]);

			$id_pasien = $this->db->insert_id();

			$this->db->insert('datamedik', [
				'id_pasien'        => $id_pasien,
				'goldar'           => $this->input->post('golDarah', true),
				'blood_press'      => $this->input->post('tekananDarah', true),
				'jantung'          => $this->input->post('penyakitJantung', true),
				'diabetes'         => $this->input->post('diabetes', true),
				'haemophilia'      => $this->input->post('kelainanDarah', true),
				'hepatitis'        => $this->input->post('hepatitis', true),
				'sakit_lain'       => $this->input->post('penyakitLainnya', true),
				'alergi_obat'      => $this->input->post('alergi_obat', true),
				'alergi_makanan'   => $this->input->post('alergi_makanan', true),
			]);
		}

		// HANDLE NO ANTRIAN
		$this->db->where('tgl_input', $tgl);
		$this->db->where('jam_res', $jam);
		$reservasi = $this->db->get('datareservasi')->result();

		$jumlah_kontrol = 0;
		$jumlah_reguler = 0;
		foreach ($reservasi as $r) {
			if ($r->jenis_reservasi === 'kontrol') $jumlah_kontrol++;
			else $jumlah_reguler++;
		}

		if ($jenis_reservasi === 'kontrol') {
			$no_antrian = ($jumlah_kontrol < 3) ? $jumlah_kontrol + 1 : $jumlah_kontrol + $jumlah_reguler + 1;
		} else {
			$no_antrian = $jumlah_kontrol + $jumlah_reguler + 1;
		}

		$no_antrian = 'A' . str_pad($no_antrian, 2, '0', STR_PAD_LEFT);

		$this->db->insert('datareservasi', [
			'id_pasien' => $id_pasien,
			'id_dok' => $dokter,
			'tgl_input' => $tgl,
			'keluhan' => $keluhan,
			'jam_res' => $jam,
			'no_antrian' => $no_antrian,
			'jenis_reservasi' => $jenis_reservasi,
			'rencana_perawatan' => $rencana_perawatan
		]);

		redirect('admin/reservasi');
	}

	public function simpanLangsung()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('masuk');
		}

		$this->load->database();

		$id_user = $this->session->userdata('id_user');

		// Ambil id_pasien dari user login
		$pasien = $this->db->get_where('datapasien', ['id_user' => $id_user])->row();
		if (!$pasien) {
			$this->session->set_flashdata('error', 'Data pasien belum lengkap.');
			redirect('home');
		}
		$id_pasien = $pasien->id_pasien;

		$dokter = $this->input->post('dokterLama', true);
		$tgl = $this->input->post('tglLama', true);
		$jam = $this->input->post('waktuLama', true);
		$keluhan = $this->input->post('keluhanLama', true);
		$rencana_perawatan = $this->input->post('rencanaPerawatanLama', true);
		$jenis_reservasi = $this->input->post('jenis_reservasiLama', true) ?? 'reguler';

		if (!$tgl || !$jam || !$dokter || !$keluhan || !$rencana_perawatan) {
			$this->session->set_flashdata('error', 'Lengkapi semua data!');
			redirect('home');
		}

		// Hitung antrian
		$this->db->where('tgl_input', $tgl);
		$this->db->where('jam_res', $jam);
		$reservasi = $this->db->get('datareservasi')->result();

		$jumlah_kontrol = 0;
		$jumlah_reguler = 0;
		foreach ($reservasi as $r) {
			if ($r->jenis_reservasi === 'kontrol') $jumlah_kontrol++;
			else $jumlah_reguler++;
		}

		if ($jenis_reservasi === 'kontrol') {
			$no_antrian = ($jumlah_kontrol < 3) ? $jumlah_kontrol + 1 : $jumlah_kontrol + $jumlah_reguler + 1;
		} else {
			$no_antrian = $jumlah_kontrol + $jumlah_reguler + 1;
		}
		$no_antrian = 'A' . str_pad($no_antrian, 2, '0', STR_PAD_LEFT);

		// Insert reservasi
		$this->db->insert('datareservasi', [
			'id_pasien' => $id_pasien,
			'id_dok' => $dokter,
			'tgl_input' => $tgl,
			'keluhan' => $keluhan,
			'jam_res' => $jam,
			'no_antrian' => $no_antrian,
			'jenis_reservasi' => $jenis_reservasi,
			'rencana_perawatan' => $rencana_perawatan
		]);

		$this->session->set_flashdata('success', 'Reservasi berhasil dibuat!');
		redirect('home');
	}

	public function batalkan($id_res)
	{
		// Pastikan ID ada
		$reservasi = $this->db->get_where('datareservasi', ['id_res' => $id_res])->row();
		if (!$reservasi) {
			$this->session->set_flashdata('error', 'Reservasi tidak ditemukan.');
			redirect('riwayat');
		}

		// Hanya bisa batalkan jika status masih proses
		if ($reservasi->status !== 'dalam proses') {
			$this->session->set_flashdata('error', 'Reservasi sudah tidak bisa dibatalkan.');
			redirect('riwayat');
		}

		// Update status jadi dibatalkan
		$this->db->where('id_res', $id_res);
		$this->db->update('datareservasi', ['status' => 'batal']);

		$this->session->set_flashdata('success', 'Reservasi berhasil dibatalkan.');
		redirect('riwayat');
	}




	public function preview($id_reservasi)
	{
		$this->load->database();

		$this->db->select('
        datareservasi.*, 
        datapasien.nama, datapasien.tmpt_lahir, datapasien.tgl_lahir, datapasien.jk,
        datapasien.pekerjaan, datapasien.status, datapasien.alamat, datapasien.no_hp,
        datamedik.goldar, datamedik.blood_press, datamedik.jantung, datamedik.diabetes,
        datamedik.haemophilia, datamedik.hepatitis, datamedik.sakit_lain, 
        datamedik.alergi_obat, datamedik.alergi_makanan
    ');
		$this->db->from('datareservasi');
		$this->db->join('datapasien', 'datapasien.id_pasien = datareservasi.id_pasien');
		$this->db->join('datamedik', 'datamedik.id_pasien = datareservasi.id_pasien');
		$this->db->where('datareservasi.id_res', $id_reservasi);

		$data['detail'] = $this->db->get()->row();

		if (!$data['detail']) {
			show_404(); // jika tidak ada
		}

		$this->load->view('admin/data_reservasi/v_preview', $data);
	}

	public function delete($id_reservasi)
	{
		$this->load->database();

		// Ambil data reservasi untuk mendapatkan id_pasien
		$this->db->where('id_reservasi', $id_reservasi);
		$reservasi = $this->db->get('datareservasi')->row();

		if (!$reservasi) {
			show_404();
		}

		$id_pasien = $reservasi->id_pasien;

		// Hapus dari tabel datareservasi
		$this->db->where('id_res', $id_reservasi);
		$this->db->delete('datareservasi');

		// Redirect ke halaman utama
		redirect('admin/reservasi');
	}
}
