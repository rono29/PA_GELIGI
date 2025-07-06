<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->database();
		$this->load->helper('text');


		$tanggalHariIni = date('Y-m-d');
		$hariIni = date('l'); // Sunday, Monday, ...

		// Ambil semua reservasi hari ini
		$this->db->where('tgl_input', $tanggalHariIni);
		$this->db->order_by('id_res', 'ASC');
		$reservasi = $this->db->get('datareservasi')->result();

		$diperiksa = count($reservasi) > 0 ? $reservasi[0]->no_antrian : '---';
		$menunggu = max(count($reservasi) - 1, 0);
		$antrian_saya = '---';

		// Jika user login
		if ($this->session->userdata('id_user')) {
			$id_user = $this->session->userdata('id_user');

			$this->db->select('datareservasi.no_antrian');
			$this->db->from('datareservasi');
			$this->db->join('datapasien', 'datapasien.id_user = datareservasi.id_pasien');
			$this->db->where('datapasien.id_user', $id_user);
			$this->db->where('datareservasi.tgl_input', $tanggalHariIni);
			$this->db->order_by('datareservasi.id_res', 'DESC');
			$this->db->limit(1);
			$row = $this->db->get()->row();

			if ($row) {
				$antrian_saya = $row->no_antrian;
			}
		}

		// Ambil daftar dokter dan jadwal mereka hari ini
		$this->db->select('datauser.*, datajadwal.hari, datajadwal.tgl, datajadwal.waktu');
		$this->db->from('datauser');
		$this->db->join('datajadwal', 'datauser.id_user = datajadwal.id_dok', 'left');
		$this->db->where('datauser.role', 'dokter');
		$this->db->where('datajadwal.hari', $tanggalHariIni); // bisa juga pakai tgl = $tanggalHariIni
		$this->db->order_by('datajadwal.waktu', 'ASC');
		$data['dokter_dengan_jadwal'] = $this->db->get()->result();

		// Data antrian dan profil
		$data['diperiksa'] = $diperiksa;
		$data['menunggu'] = $menunggu;
		$data['antrian_saya'] = $antrian_saya;

		$isProfileIncomplete = false;
		if ($this->session->userdata('id_user')) {
			$id_user = $this->session->userdata('id_user');
			$pasien = $this->db->get_where('datapasien', ['id_user' => $id_user])->row();
			if (!$pasien || !$this->db->get_where('datamedik', ['id_pasien' => $pasien->id_pasien])->row()) {
				$isProfileIncomplete = true;
			}
		}

		$data['show_profile_modal'] = $isProfileIncomplete;
		// Ambil data layanan
		$data['layanan'] = $this->db->get('datalayanan')->result();
		// Ambil data artikel dari database
		$data['artikel'] = $this->db->get('dataartikel')->result();
		$this->load->view('v_home', $data);
	}
}
