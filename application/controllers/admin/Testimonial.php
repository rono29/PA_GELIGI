<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data['testi'] = $this->db->get('datatestimonial')->result(); // Ambil data
		$this->load->view('admin/kelola_testi/v_testimonial', $data); // Kirim ke view
	}

	public function unggah($id)
	{
		$this->load->database();
		$this->load->library('session'); // jika pakai session

		$updated_by = $this->session->userdata('nama_admin') ?? 'Admin';

		$this->db->where('id_testimonial', $id);
		$this->db->update('datatestimonial', [
			'status' => 'approved',
			'updated_at' => date('Y-m-d H:i:s'),
			'updated_by' => 1
		]);

		redirect('admin/testimonial');
	}
}
