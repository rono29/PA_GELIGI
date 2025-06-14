<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/data_reservasi/v_reservasi');
	}
	public function tambah()
	{
		$this->load->view('admin/data_reservasi/v_formresv');
	}
}
