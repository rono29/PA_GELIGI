<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{

	public function index()
	{
		$this->load->database();

		$id_user = $this->session->userdata('id_user');

		// Ambil id_pasien berdasarkan id_user
		$pasien = $this->db->get_where('datapasien', ['id_user' => $id_user])->row();

		if (!$pasien) {
			$data['reservasi'] = [];
		} else {
			$this->db->select('datareservasi.*, datauser.nama as nama_dokter');
			$this->db->from('datareservasi');
			$this->db->join('datauser', 'datauser.id_user = datareservasi.id_dok');
			$this->db->where('datareservasi.id_pasien', $id_user);
			$data['reservasi'] = $this->db->get()->result();
		}

		$this->load->view('v_riwayat', $data);
	}
}
