<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{

	public function index()
	{
		$this->load->view('v_masuk');
	}

	public function login()
	{
		$this->load->database();

		$email    = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		// Ambil user dari database
		$user = $this->db->get_where('datauser', ['email' => $email])->row();

		if ($user) {
			if (password_verify($password, $user->password)) {
				// Simpan sesi
				$this->session->set_userdata([
					'id_user' => $user->id_user,
					'nama'    => $user->nama,
					'email'   => $user->email,
					'role'    => $user->role,
					'logged_in' => true
				]);

				// Redirect berdasarkan role
				if ($user->role == 'admin') {
					redirect('admin/dashboard');
				} elseif ($user->role == 'dokter') {
					redirect('admin/dashboard');
				} elseif ($user->role == 'staf') {
					redirect('admin/dashboard');
				} else {
					redirect('home');
				}
			} else {
				$this->session->set_flashdata('error', 'Password salah');
				redirect('masuk');
			}
		} else {
			$this->session->set_flashdata('error', 'Email tidak ditemukan');
			redirect('masuk');
		}

		

	}
	public function logout()
		{
			$this->session->sess_destroy();
			redirect('masuk');
		}
}
