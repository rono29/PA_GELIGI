<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

	public function index()
	{
		$data['faq'] = $this->db->get('datafaq')->result();
		$this->load->view('v_faq',$data);
	}
}
