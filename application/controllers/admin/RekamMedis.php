<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */
class RekamMedis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservasiModel'); // load model
	}

	public function index()
	{
		$data['rm'] = $this->reservasiModel->get_data_rekammedis();
		$this->load->view('admin/data_rekammedis/v_rekammedis', $data);
	}

	public function tambah()
	{
		$this->load->database();
		$this->db->where('role', 'dokter');
		$data['dokter'] = $this->db->get('datauser')->result();

		$this->load->view('admin/data_rekammedis/v_tambahrekam', $data);
	}

	public function simpan()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('masuk');
		}
		$this->load->database();
		$id_user = $this->session->userdata('id_user');

		// Insert ke datapasien
		$this->db->insert('datapasien', [
			'id_user'		   => $id_user,
			'nama'      => $this->input->post('namaLengkap', true),
			'tmpt_lahir'              => $this->input->post('tempat_lahir', true),
			'tgl_lahir'              => $this->input->post('tgl_lahir', true),
			'jk'     => $this->input->post('jenis_kelamin', true),
			'pekerjaan'        => $this->input->post('Pekerjaan', true),
			'status' => $this->input->post('statusPernikahan', true),
			'alamat'           => $this->input->post('alamat', true),
			'no_hp'             => $this->input->post('noHp', true)
		]);

		$id_pasien = $this->db->insert_id(); // ambil id pasien yg baru

		// Insert ke datamedikpasien
		$this->db->insert('datamedik', [
			'id_pasien'        => $id_pasien,
			'goldar'       => $this->input->post('golDarah', true),
			'blood_press'   => $this->input->post('tekananDarah', true),
			'jantung' => $this->input->post('penyakitJantung', true),
			'diabetes'       => $this->input->post('diabetes', true),
			'haemophilia'  => $this->input->post('kelainanDarah', true),
			'hepatitis'      => $this->input->post('hepatitis', true),
			'sakit_lain' => $this->input->post('penyakitLainnya', true),
			'alergi_obat'     => $this->input->post('alergi_obat', true),
			'alergi_makanan'  => $this->input->post('alergi_makanan', true),

		]);

		$this->db->insert('datarekammedis', [
			'id_pasien' => $id_pasien,
			'id_dok' => 1,
			'id_staf' => $id_user,
			'no_rekammedis' => 1,
			'tgl_periksa' => $this->input->post('tgl'),
			'gigi' => $this->input->post('gigi'),
			'diagnosa' => $this->input->post('diagnosa'),
			'perawatan' => $this->input->post('perawatan'),
			'keterangan' => $this->input->post('keterangan')
		]);

		// Redirect atau tampil pesan
		redirect('admin/rekammedis');
	}

	public function preview($id_reservasi)
	{
		$this->load->database();

		$this->db->select('
        datarekammedis.*, 
        datapasien.nama, datapasien.tmpt_lahir, datapasien.tgl_lahir, datapasien.jk,
        datapasien.pekerjaan, datapasien.status, datapasien.alamat, datapasien.no_hp,
        datamedik.goldar, datamedik.blood_press, datamedik.jantung, datamedik.diabetes,
        datamedik.haemophilia, datamedik.hepatitis, datamedik.sakit_lain, 
        datamedik.alergi_obat, datamedik.alergi_makanan
    ');
		$this->db->from('datarekammedis');
		$this->db->join('datapasien', 'datapasien.id_pasien = datarekammedis.id_pasien');
		$this->db->join('datamedik', 'datamedik.id_pasien = datarekammedis.id_pasien');
		$this->db->where('datarekammedis.id_RM', $id_reservasi);

		$data['detail'] = $this->db->get()->row();

		if (!$data['detail']) {
			show_404(); // jika tidak ada
		}

		$this->load->view('admin/data_rekammedis/v_preview', $data);
	}

	public function delete($id_reservasi)
	{
		$this->load->database();

		// Ambil data reservasi untuk mendapatkan id_pasien
		$this->db->where('id_res', $id_reservasi);
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
