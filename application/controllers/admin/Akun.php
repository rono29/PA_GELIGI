<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data['akun'] = $this->db->get('datauser')->result();
		$this->load->view('admin/akun/v_akun', $data);
	}

	public function tambah()
	{
		$this->load->view('admin/akun/v_tambahakun');
	}
	public function simpan()
	{
		$this->load->database();

		$nama     = $this->input->post('nama', true);
		$email    = $this->input->post('email', true);
		$password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		$role_val = $this->input->post('role', true); // 1 = dokter, 2 = staf

		// Mapping value dari select ke enum
		$role = ($role_val == '1') ? 'dokter' : 'staf';

		$data = [
			'nama'       => $nama,
			'email'      => $email,
			'password'   => $password,
			'role'       => $role,
		];

		$this->db->insert('datauser', $data);
		redirect('admin/akun');
	}
}
