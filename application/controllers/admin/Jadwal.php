<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */


class Jadwal extends CI_Controller
{

	public function index()
	{
		$this->load->view('admin/penjadwalan/v_jadwal');
	}
	public function tambah()
	{
		$this->load->view('admin/penjadwalan/v_formjadwal');
	}
	public function jadwal_harian()
	{
		$this->load->view('admin/penjadwalan/v_formjadwalharian');
	}
	public function edit()
	{
		$this->load->view('admin/penjadwalan/v_editjadwal');
	}

	public function simpan()
	{
		$this->load->database();
		$this->db->insert('datadokter', [
			'namaDokter'      => $this->input->post('namaDokter', true),
			'Jadwal'          => $this->input->post('Jadwal', true),
			'Status'		  => 1,
		]);
	}
}
