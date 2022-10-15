<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('petugasM');
    }

    public function index()
    {
        $data['petugas'] = $this->petugasM->getPetugas();
        $this->load->view('admin/petugas', $data);
    }

    public function edit()
    {
        $this->load->view('admin/editPetugas');
        
    }

    public function tambah_aksi(){
        $id_login = $this->input->post('id login');
        $nama_petugas = $this->input->post('nama petugas');
        

        $data = array(
            'id login'        =>$id_login,
            'nama petugas'    =>$nama_petugas,

        );

        $this->siswa->input_data($data, 'petugas');
        redirect(site_url('petugas/index'));
    }
}
