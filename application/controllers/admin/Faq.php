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

	public function edit($id)
	{
		$this->load->database();

		$data['faq'] = $this->db->get_where('datafaq', ['id_staf' => $id])->row();

		if (!$data['faq']) {
			show_404();
		}

		$this->load->view('admin/kelola_faq/v_editfaq', $data);
	}

	public function update($id)
	{
		$this->load->database();

		$data = [
			'pertanyaan' => $this->input->post('pertanyaan', true),
			'jawaban'    => $this->input->post('jawaban', true),
		];

		$this->db->where('id_staf', $id);
		$update = $this->db->update('datafaq', $data);

		if ($update) {
			$this->session->set_flashdata('success', 'Data FAQ berhasil diperbarui.');
		} else {
			$this->session->set_flashdata('error', 'Data FAQ gagal diperbarui.');
		}

		redirect('admin/faq');
	}

	public function delete($id)
	{
		$this->load->database();

		$deleted = $this->db->delete('datafaq', ['id' => $id]);

		if ($deleted) {
			$this->session->set_flashdata('success', 'Data FAQ berhasil dihapus.');
		} else {
			$this->session->set_flashdata('error', 'Gagal menghapus data FAQ.');
		}

		redirect('admin/faq');
	}
}
