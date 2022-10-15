<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin');
    }

    public function index()
    {
        $data['siswa'] = $this->admin->getAllUser();
        $this->load->view('admin/siswa', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editSiswa');
        
    }

    public function tambah_aksi(){
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $id_kelas = $this->input->post('id kelas');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no telepon');
        $id_spp = $this->input->post('id spp');
        $id_login = $this->input->post('id login');

        $data = array(
            'nama'        =>$nama,
            'nisn'        =>$nisn,
            'nis'         =>$nis,
            'id kelas'    =>$id_kelas,
            'alamat'      =>$alamat,
            'no telepon'  =>$no_telp,
            'id spp'      =>$id_spp,
            'id login'     =>$id_login,

        );

        $this->siswa->input_data($data, 'siswa');
        redirect(site_url('siswa/index'));
    }

}
