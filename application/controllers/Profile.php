<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		if (!$this->session->userdata('id_user')) {
			redirect('masuk');
		}
	}

	public function index()
{
    $id_user = $this->session->userdata('id_user');

    $this->load->database();

    // Ambil data dari datauser
    $this->db->where('id_user', $id_user);
    $user = $this->db->get('datauser')->row();

    // Ambil data dari datapasien
    $this->db->where('id_user', $id_user);
    $pasien = $this->db->get('datapasien')->row();

    // Ambil data dari datamedik (jika datapasien ada)
    $medik = null;
    if ($pasien) {
        $this->db->where('id_pasien', $pasien->id_pasien);
        $medik = $this->db->get('datamedik')->row();
    }

    // Gabungkan ke dalam satu object $profile
    $profile = new stdClass();
    $profile->email = $user->email ?? '';
    $profile->nama = $user->nama ?? '';

    if ($pasien) {
        foreach ($pasien as $key => $val) {
            $profile->$key = $val;
        }
    }

    if ($medik) {
        foreach ($medik as $key => $val) {
            $profile->$key = $val;
        }
    }

    $data['profile'] = $profile;

    $this->load->view('v_profile', $data);
}


	public function simpan()
	{
		$id_user = $this->session->userdata('id_user');

		// Ambil data pasien dari user login
		$pasien = $this->db->get_where('datapasien', ['id_user' => $id_user])->row();

		$data_pasien = [
			'id_user'      => $id_user,
			'nama'         => $this->input->post('namaLengkap'),
			'tmpt_lahir'   => $this->input->post('tempatLahir'),
			'tgl_lahir'    => $this->input->post('tanggalLahir'),
			'jk'           => $this->input->post('jenisKelamin'),
			'pekerjaan'    => $this->input->post('pekerjaan'),
			'status'       => $this->input->post('statusPernikahan'),
			'alamat'       => $this->input->post('alamat'),
			'no_hp'        => $this->input->post('noHP'),
		];

		if ($pasien) {
			$this->db->where('id_user', $id_user);
			$this->db->update('datapasien', $data_pasien);
			$id_pasien = $pasien->id_pasien;
		} else {
			$this->db->insert('datapasien', $data_pasien);
			$id_pasien = $this->db->insert_id();
		}

		$data_medik = [
			'id_pasien'       => $id_pasien,
			'goldar'          => $this->input->post('golonganDarah'),
			'blood_press'     => '', // Jika ingin tambahkan tekanan darah, tambahkan field di view
			'jantung'         => $this->input->post('penyakitJantung'),
			'diabetes'        => $this->input->post('diabetes'),
			'haemophilia'     => $this->input->post('haemophilia'),
			'hepatitis'       => $this->input->post('hepatitis'),
			'sakit_lain'      => '', // Bisa tambahkan jika perlu
			'alergi_obat'     => $this->input->post('alergiObatDetail'),
			'alergi_makanan'  => $this->input->post('alergiMakananDetail'),
		];

		$cek_medik = $this->db->get_where('datamedik', ['id_pasien' => $id_pasien])->row();

		if ($cek_medik) {
			$this->db->where('id_pasien', $id_pasien);
			$this->db->update('datamedik', $data_medik);
		} else {
			$this->db->insert('datamedik', $data_medik);
		}

		$this->session->set_flashdata('success', 'Profil berhasil disimpan.');
		redirect('profile');
	}
}
