<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/antrian/v_antrian');
	}
}
