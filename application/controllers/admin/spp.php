<?php
defined('BASEPATH') or exit('No direct script access allowed');

class spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sppM');
    }

    public function index()
    {
        $data['spp'] = $this->sppM->getSpp();
        $this->load->view('admin/spp', $data);
    }
    
    public function edit()
    {
        $this->load->view('admin/editSpp');
        
    }

    public function tambah_aksi(){
        $id_spp = $this->input->post('id spp');
        $tahun = $this->input->post('nominal');
        $nominal = $this->input->post('tahun');
        

        $data = array(
            'id spp'        =>$id_spp,
            'nominal'        =>$tahun,
            'tahun'         =>$nominal,


        );

        $this->siswa->input_data($data, 'spp');
        redirect(site_url('spp/index'));
    }

}
