<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/kelola_layanan/v_layanan');
	}
	public function tambah()
	{
		$this->load->view('admin/kelola_layanan/v_formlayanan');
	}
}
