<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelasM');
    }

    public function index()
    {
        $data['kelas'] = $this->kelasM->getKelas();
        $this->load->view('admin/kelas', $data);
    }

    public function getAll(){
        $this->db->from('kelas');
        $this->db->select('*');
        $this->db->join('kompetensi_keahlian' , 'kelas.id_kk=kompetensi_keahlian.id_kk');
        $query = $this->db->get();
        return $query->result();
    }
}
