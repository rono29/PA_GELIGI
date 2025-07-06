<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data['faq'] = $this->db->get('datafaq')->result();
		$this->load->view('admin/kelola_faq/v_faq', $data); // ← kirim data
	}

	public function tambah()
	{
		$this->load->view('admin/kelola_faq/v_formfaq');
	}

	public function simpan()
	{
		$this->load->database();

		$data = [
			'id_staf'    => 1,
			'pertanyaan'      => $this->input->post('pertanyaan', true),
			'jawaban'  => $this->input->post('jawaban', true),
		];

		$this->db->insert('datafaq', $data);
		redirect('admin/faq/');
	}
}
