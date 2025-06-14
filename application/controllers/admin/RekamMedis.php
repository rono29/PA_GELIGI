<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RekamMedis extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/data_rekammedis/v_rekammedis');
	}

	public function tambah()
	{
		$this->load->view('admin/data_rekammedis/v_tambahrekam');
	}
}
