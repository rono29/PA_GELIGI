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
		$this->db->select('datalayanan.*, staf.nama as nama_staf');
		$this->db->from('datalayanan');
		$this->db->join('datauser as staf', 'staf.id_user = datalayanan.id_staf', 'left');
		$data['layanan'] = $this->db->get()->result();
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
		$id_user = $this->session->userdata('id_user');

		// Cek apakah user sudah login
		if (!$id_user) {
			redirect('masuk'); // atau tampilkan error
		}
		// Cek apakah ada file yang diupload
		if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
			$image_data = file_get_contents($_FILES['gambar']['tmp_name']);

			$data = [
				'id_staf'    => $id_user,
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

	public function edit($id)
	{
		$this->load->database();

		$data['layanan'] = $this->db->get_where('datalayanan', ['id_layanan' => $id])->row();

		if (!$data['layanan']) {
			show_404();
		}

		$this->load->view('admin/kelola_layanan/v_editlayanan', $data);
	}

	public function update($id)
	{
		$this->load->database();

		$data = [
			'judul' => $this->input->post('judul', true),
			'deskripsi' => $this->input->post('deskripsi', true),
		];

		// Jika ada gambar baru yang diupload
		if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
			$image_data = file_get_contents($_FILES['gambar']['tmp_name']);
			$data['gambar'] = $image_data;
		}

		$this->db->where('id_layanan', $id);
		$this->db->update('datalayanan', $data);

		$this->session->set_flashdata('success', 'Data layanan berhasil diperbarui.');
		redirect('admin/layanan');
	}

	public function delete($id)
	{
		$this->load->database();

		$deleted = $this->db->delete('datalayanan', ['id_layanan' => $id]);

		if ($deleted) {
			$this->session->set_flashdata('success', 'Data layanan berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus data layanan.');
		}

		redirect('admin/layanan');
	}
}
