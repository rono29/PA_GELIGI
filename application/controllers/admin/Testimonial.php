<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimonial extends CI_Controller
{

	public function index()
	{
		$this->load->database();

		$this->db->select('datatestimonial.*, datauser.nama AS nama_staf');
		$this->db->from('datatestimonial');
		$this->db->join('datauser', 'datauser.id_user = datatestimonial.updated_by', 'left');
		$data['testi'] = $this->db->get()->result();

		$this->load->view('admin/kelola_testi/v_testimonial', $data);
	}


	public function unggah($id)
	{
		$this->load->database();
		$this->load->library('session'); // jika pakai session

		$id_user       = $this->session->userdata('id_user');

		$this->db->where('id_testimonial', $id);
		$this->db->update('datatestimonial', [
			'status' => 'approved',
			'updated_at' => date('Y-m-d H:i:s'),
			'updated_by' => $id_user
		]);

		redirect('admin/testimonial');
	}

	public function simpan()
	{
		$this->load->database();

		$email         = $this->input->post('email', true);
		$rating        = $this->input->post('rating', true);
		$message       = $this->input->post('message', true);
		$nama_pengirim = $this->input->post('nama_pengirim', true);
		$id_user       = $this->session->userdata('id_user');

		if (!$email || !$rating || !$message) {
			$this->session->set_flashdata('error', 'Semua field wajib diisi.');
			redirect($_SERVER['HTTP_REFERER']);
		}

		if (!$id_user) {
			$this->session->set_flashdata('error', 'Anda harus login terlebih dahulu.');
			redirect(base_url('masuk'));
		}

		// Cek apakah user pernah reservasi
		$this->db->select('datareservasi.id_res');
		$this->db->from('datareservasi');
		$this->db->join('datapasien', 'datapasien.id_user = datareservasi.id_pasien');
		$this->db->where('datapasien.id_user', $id_user);
		$this->db->limit(1);
		$reservasi = $this->db->get()->row();

		if (!$reservasi) {
			$this->session->set_flashdata('error', 'Anda belum pernah melakukan reservasi, sehingga tidak dapat mengirim testimoni.');
			redirect($_SERVER['HTTP_REFERER']);
		}

		$data = [
			'email'         => $email,
			'rating'        => $rating,
			'testimonial'   => $message,
			'status'        => 'pending',
			'created_at'    => date('Y-m-d H:i:s'),
			'nama_pengirim' => $nama_pengirim ?: NULL
		];

		$this->db->insert('datatestimonial', $data);

		$this->session->set_flashdata('sukses', 'Testimoni berhasil dikirim. Menunggu persetujuan admin.');
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
