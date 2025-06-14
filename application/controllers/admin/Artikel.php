<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/kelola_artikel/v_artikel');
	}

	public function tambah()
	{
		$this->load->view('admin/kelola_artikel/v_formartikel');
	}
}
