<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
}
