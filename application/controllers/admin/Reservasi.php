<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */

class Reservasi extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin/data_reservasi/v_reservasi');
	}
	public function tambah()
	{
		$this->load->database();
		$data['dokter'] = $this->db->get_where('datadokter', ['Status' => 1])->result();

		$this->load->view('admin/data_reservasi/v_formresv', $data);
	}

	public function simpan()
	{
		$this->load->database();

		// Insert ke datapasien
		$this->db->insert('datapasien', [
			'namaLengkap'      => $this->input->post('namaLengkap', true),
			'ttl'              => $this->input->post('ttl', true),
			'jenisKelamin'     => $this->input->post('jenisKelamin', true),
			'Pekerjaan'        => $this->input->post('Pekerjaan', true),
			'statusPernikahan' => $this->input->post('statusPernikahan', true),
			'Alamat'           => $this->input->post('Alamat', true),
			'noHp'             => $this->input->post('noHp', true)
		]);

		$user_id = $this->db->insert_id(); // ambil id pasien yg baru

		// Insert ke datamedikpasien
		$this->db->insert('datamedikpasien', [
			'golDarah'       => $this->input->post('golDarah', true),
			'tekananDarah'   => $this->input->post('tekananDarah', true),
			'penyakitJantung' => $this->input->post('penyakitJantung', true),
			'diabetes'       => $this->input->post('diabetes', true),
			'kelainanDarah'  => $this->input->post('kelainanDarah', true),
			'hepatitis'      => $this->input->post('hepatitis', true),
			'penyakitLainnya' => $this->input->post('penyakitLainnya', true),
			'alergiObat'     => $this->input->post('alergiObat', true),
			'alergiMakanan'  => $this->input->post('alergiMakanan', true),
			'user_id'        => $user_id
		]);
		$tgl = $this->input->post('tgl', true);
		$waktu = $this->input->post('waktu', true);

		$tglWaktu = $tgl . ' ' . $waktu;

		$this->db->insert('datareservasi', [
			'dokter' => $this->input->post('dokter'),
			'tglWaktu' => $tglWaktu,
			'keluhan' => $this->input->post('keluhan'),
			'user_id' => $user_id
		]);

		// Redirect atau tampil pesan
		redirect('admin/reservasi');
	}
}
