<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */
class Artikel extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data['layanan'] = $this->db->get('dataartikel')->result();
		$this->load->view('admin/kelola_artikel/v_artikel', $data);
	}

	public function tambah()
	{
		$this->load->view('admin/kelola_artikel/v_formartikel');
	}

	public function simpan()
	{
		$this->load->database();

		// Cek apakah ada file yang diupload
		if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
			$image_data = file_get_contents($_FILES['gambar']['tmp_name']);

			$data = [
				'id_staf'    => 1,
				'judul'      => $this->input->post('judul', true),
				'deskripsi'  => $this->input->post('deskripsi', true),
				'gambar'     => $image_data // simpan sebagai binary BLOB
			];

			$this->db->insert('dataartikel', $data);
			redirect('admin/artikel/');
		} else {
			echo "Upload gagal: " . $_FILES['gambar']['error'];
		}
	}

	public function gambar($id)
	{
		$this->load->database();
		$this->db->where('id_artikel', $id);
		$query = $this->db->get('dataartikel')->row();

		if ($query && $query->gambar) {
			header("Content-Type: image/jpeg"); // sesuaikan jika format lain
			echo $query->gambar;
		} else {
			// Gambar tidak ditemukan atau kosong
			http_response_code(404);
			echo "Image not found.";
		}
	}

	public function edit($id)
	{
		$this->load->database();
		$data['artikel'] = $this->db->get_where('dataartikel', ['id_artikel' => $id])->row();

		if (!$data['artikel']) {
			show_404();
		}

		$this->load->view('admin/kelola_artikel/v_editartikel', $data);
	}

	public function update($id)
	{
		$this->load->database();

		$data = [
			'judul'     => $this->input->post('judul', true),
			'deskripsi' => $this->input->post('deskripsi', true),
		];

		// Jika ada gambar baru di-upload
		if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
			$image_data = file_get_contents($_FILES['gambar']['tmp_name']);
			$data['gambar'] = $image_data;
		}

		$this->db->where('id_artikel', $id);
		$updated = $this->db->update('dataartikel', $data);

		if ($updated) {
			$this->session->set_flashdata('success', 'Data artikel berhasil diperbarui.');
		} else {
			$this->session->set_flashdata('error', 'Gagal memperbarui data artikel.');
		}

		redirect('admin/artikel');
	}

	public function delete($id)
	{
		$this->load->database();
		$deleted = $this->db->delete('dataartikel', ['id_artikel' => $id]);

		if ($deleted) {
			$this->session->set_flashdata('success', 'Data artikel berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus data artikel.');
		}

		redirect('admin/artikel');
	}
}
