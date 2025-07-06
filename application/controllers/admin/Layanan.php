<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Input $input
 * @property CI_Upload $upload
 * @property CI_DB $db
 */
class Layanan extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$data['layanan'] = $this->db->get('datalayanan')->result();
		$this->load->view('admin/kelola_layanan/v_layanan', $data);
	}

	public function gambar($id)
	{
		$this->load->database();
		$this->db->where('id_layanan', $id);
		$query = $this->db->get('datalayanan')->row();

		if ($query && $query->gambar) {
			header("Content-Type: image/jpeg"); // sesuaikan jika format lain
			echo $query->gambar;
		} else {
			// Gambar tidak ditemukan atau kosong
			http_response_code(404);
			echo "Image not found.";
		}
	}


	public function tambah()
	{
		$this->load->view('admin/kelola_layanan/v_formlayanan');
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

			$this->db->insert('datalayanan', $data);
			redirect('admin/layanan/');
		} else {
			echo "Upload gagal: " . $_FILES['gambar']['error'];
		}
	}
}
