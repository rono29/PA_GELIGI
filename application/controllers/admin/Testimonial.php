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

	public function simpan()
	{
		$this->load->database();

		$email     = $this->input->post('email', true);
		$rating    = $this->input->post('rating', true);
		$message   = $this->input->post('message', true);
		$nama_pengirim = $this->input->post('nama_pengirim', true); // optional field jika kamu tambahkan di form

		if (!$email || !$rating || !$message) {
			$this->session->set_flashdata('error', 'Semua field wajib diisi.');
			redirect($_SERVER['HTTP_REFERER']);
		}

		$data = [
			'email'          => $email,
			'rating'         => $rating,
			'testimonial'    => $message, // Ganti dari 'message' ke 'testimonial'
			'status'         => 'pending',
			'created_at'     => date('Y-m-d H:i:s'),
			'nama_pengirim'  => $nama_pengirim ?? NULL,
		];

		$this->db->insert('datatestimonial', $data);

		$this->session->set_flashdata('success', 'Testimoni berhasil dikirim. Menunggu persetujuan admin.');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete($id)
	{
		$this->load->database();

		$deleted = $this->db->delete('datatestimonial', ['id_testimonial' => $id]);

		if ($deleted) {
			$this->session->set_flashdata('success', 'Testimonial berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus testimonial.');
		}

		redirect('admin/testimonial');
	}
}
