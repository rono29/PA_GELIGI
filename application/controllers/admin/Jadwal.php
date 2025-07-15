<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */


class Jadwal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservasiModel'); // load model
	}

	public function index()
	{
		$data['reservasi'] = $this->reservasiModel->get_all_jadwal();
		$this->load->view('admin/penjadwalan/v_jadwal', $data);
	}
	public function tambah()
	{
		$this->load->database();
		$this->db->where('role', 'dokter');
		$data['dokter'] = $this->db->get('datauser')->result();

		$this->load->view('admin/penjadwalan/v_formjadwal', $data);
	}
	public function jadwal_harian()
	{
		$this->load->view('admin/penjadwalan/v_formjadwalharian');
	}

	public function edit($id)
	{
		$data['jadwal'] = $this->db->get_where('datajadwal', ['id_jadwal' => $id])->row();
		$this->load->view('admin/penjadwalan/v_editjadwal', $data);
	}

	public function simpan()
	{
		$this->load->database();

		// Ambil ID dokter dari form
		$id_dokter = $this->input->post('dokterLama', true);

		// Ambil nama dokter dari tabel datauser berdasarkan ID
		$dokter = $this->db->get_where('datauser', ['id_user' => $id_dokter])->row();

		// Validasi
		if (!$dokter) {
			show_error('Dokter tidak ditemukan.', 404);
			return;
		}

		$image_data = file_get_contents($_FILES['gambar']['tmp_name']);

		// Simpan ke datajadwal
		$this->db->insert('datajadwal', [
			'id_dok'  => $id_dokter,
			'nama'    => $dokter->nama,
			'hari'    => $this->input->post('date', true), // pastikan input name-nya 'hari'
			'tgl'     => $this->input->post('date', true),
			'waktu'   => $this->input->post('waktu', true),

			'status'  => $this->input->post('status')
		]);

		// Ambil data dokter berdasarkan ID
		$dokter = $this->db->get_where('datauser', ['id_user' => $id_dokter])->row();

		// Pastikan dokter ditemukan
		if ($dokter) {
			// Update gambar berdasarkan id_user
			$this->db->where('id_user', $id_dokter);
			$this->db->update('datauser', [
				'gambar' => $image_data
			]);
		} else {
			// Jika tidak ditemukan, bisa lempar error/log
			log_message('error', 'Dokter dengan ID ' . $id_dokter . ' tidak ditemukan.');
		}


		redirect('admin/jadwal'); // atau tujuan lain setelah simpan
	}


	public function delete($id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->delete('datajadwal');

		$this->session->set_flashdata('success', 'Data jadwal berhasil dihapus.');
		redirect('admin/jadwal');
	}

	public function update($id)
	{
		$this->load->database();

		$id_dokter = $this->input->post('id_dokter', true);
		$dokter = $this->db->get_where('datauser', ['id_user' => $id_dokter])->row();

		if (!$dokter) {
			show_error('Dokter tidak ditemukan.', 404);
			return;
		}

		$this->db->where('id_jadwal', $id);
		$this->db->update('datajadwal', [
			'id_dok'  => $id_dokter,
			'nama'    => $dokter->nama,
			'hari'    => $this->input->post('date', true),
			'tgl'     => $this->input->post('date', true),
			'waktu'   => $this->input->post('waktu', true),
		]);

		$this->session->set_flashdata('success', 'Data jadwal berhasil diperbarui.');
		redirect('admin/jadwal');
	}
}
