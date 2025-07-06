<?php
defined('BASEPATH') or exit('No direct script access allowed');

class reservasiModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_data_reservasi()
    {
        $this->db->select('datareservasi.*, datapasien.tgl_lahir, datapasien.alamat, datapasien.nama,
        TIMESTAMPDIFF(YEAR, datapasien.tgl_lahir, CURDATE()) AS umur');
        $this->db->from('datareservasi');
        $this->db->join('datapasien', 'datapasien.id_user = datareservasi.id_pasien');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_data_rekammedis()
    {
        $this->db->select('
		datarekammedis.*,
		datapasien.tgl_lahir,
		datapasien.alamat,
		datapasien.nama AS nama_pasien,
		datauser.nama AS nama_staf,
		TIMESTAMPDIFF(YEAR, datapasien.tgl_lahir, CURDATE()) AS umur
	');
        $this->db->from('datarekammedis');
        $this->db->join('datapasien', 'datapasien.id_pasien = datarekammedis.id_pasien');
        $this->db->join('datauser', 'datauser.id_user = datarekammedis.id_staf');
        $query = $this->db->get();
        return $query->result();
    }


    public function get_all_antrian()
    {
        $this->db->order_by('no_antrian', 'ASC');
        return $this->db->get('datareservasi')->result();
    }

    public function get_antrian_sekarang()
    {
        $this->db->where('status', 'Dalam Proses');
        $this->db->order_by('no_antrian', 'ASC');
        return $this->db->get('datareservasi')->row();
    }

    public function lanjutkan_antrian()
    {
        // Set antrian sebelumnya menjadi "Selesai"
        $this->db->where('status', 'Dalam Proses');
        $this->db->update('datareservasi', ['status' => 'Selesai']);

        // Ambil pasien dengan status 'Menunggu' berikutnya
        $this->db->where('status', 'Menunggu');
        $this->db->order_by('no_antrian', 'ASC');
        $this->db->limit(1);
        $next = $this->db->get('datareservasi')->row();

        if ($next) {
            // Ubah status ke 'Dalam Proses'
            $this->db->where('id', $next->id); // pastikan ada kolom `id` sebagai primary key
            $this->db->update('datareservasi', ['status' => 'Dalam Proses']);
        }
    }

    public function get_all_jadwal()
    {
        return $this->db->get('datajadwal')->result();
    }

    public function get_reservasi_hari_ini()
    {
        $this->db->select('datareservasi.*, 
                       pasien.nama as nama_pasien, 
                       dokter.nama as nama_dokter');
        $this->db->from('datareservasi');

        // Join untuk pasien (id_user)
        $this->db->join('datauser as pasien', 'pasien.id_user = datareservasi.id_pasien');

        // Join untuk dokter (id_dokter)
        $this->db->join('datauser as dokter', 'dokter.id_user = datareservasi.id_dok');


        // Hanya data hari ini
        $this->db->where('DATE(datareservasi.created_at)', date('Y-m-d'));
        $this->db->order_by('datareservasi.created_at', 'ASC');

        return $this->db->get()->result();
    }
}
