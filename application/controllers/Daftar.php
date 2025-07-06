<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$this->load->view('v_daftar');
	}

	public function simpan()
	{
		$this->load->database();
		$this->load->library('form_validation');

		// Validasi input
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[datauser.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('daftar');
		}

		$nama = $this->input->post('nama', true);
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$data = [
			'nama'     => $nama,
			'email'    => $email,
			'password' => $hashed_password,
			'role'     => 'pasien'
		];

		$this->db->insert('datauser', $data);

		$this->session->set_flashdata('success', 'Pendaftaran berhasil! Silakan login.');
		redirect('masuk');
	}
}
