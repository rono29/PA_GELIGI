<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/kelola_faq/v_faq');
	}

	public function tambah()
	{
		$this->load->view('admin/kelola_faq/v_formfaq');
	}
}
