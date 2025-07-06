<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservasiModel');
	}
	public function index()
	{
		$data['antrian_sekarang'] = $this->reservasiModel->get_antrian_sekarang();
		$data['total_reservasi'] = $this->db->count_all('datareservasi');
		$data['total_rekammedis'] = $this->db->count_all('datarekammedis');
		$data['reservasi_hari_ini'] = $this->reservasiModel->get_reservasi_hari_ini();
		$this->load->view('admin/dashboard/v_dashboard', $data);
	}
}
