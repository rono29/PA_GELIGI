<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/akun/v_akun');
	}

	public function tambah()
	{
		$this->load->view('admin/akun/v_tambahakun');
	}
}
