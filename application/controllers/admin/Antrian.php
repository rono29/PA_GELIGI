<?php
class Antrian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('reservasiModel');
    }

    public function index()
    {
        $data['antrian'] = $this->reservasiModel->get_all_antrian();
        $data['antrian_sekarang'] = $this->reservasiModel->get_antrian_sekarang();
        // Ambil total data
        $data['total_reservasi'] = $this->db->count_all('datareservasi');
        $data['total_rekammedis'] = $this->db->count_all('datarekammedis');
        $this->load->view('admin/antrian/v_antrian', $data);
    }

    public function lanjut()
    {
        $this->reservasiModel->lanjutkan_antrian();
        redirect('admin/antrian');
    }
}
