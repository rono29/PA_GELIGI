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

		// Simpan ke datajadwal
		$this->db->insert('datajadwal', [
			'id_dok'  => $id_dokter,
			'nama'    => $dokter->nama,
			'hari'    => $this->input->post('date', true), // pastikan input name-nya 'hari'
			'tgl'     => $this->input->post('date', true),
			'waktu'   => $this->input->post('waktu', true)
		]);

		redirect('jadwaldokter'); // atau tujuan lain setelah simpan
	}


	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('datajadwal');

		redirect('admin/jadwal');
	}
	public function update($id)
	{
		$this->db->where('id', $id);
		$this->db->update('datajadwal', [
			'nama'  => $this->input->post('dokter', true),
			'hari'  => $this->input->post('date', true),
			'tgl'   => $this->input->post('date', true),
			'waktu' => $this->input->post('waktu', true),
		]);

		redirect('admin/jadwal');
	}
}
