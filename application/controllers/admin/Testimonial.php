<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/kelola_testi/v_testimonial');
	}
}
