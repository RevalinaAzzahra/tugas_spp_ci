<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugasM extends CI_Model
{

    public function getPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    public function tambah_aksi(){
        $id_login = $this->input->post('id login');
        $nama_petugas = $this->input->post('nama petugas');
        

        $data = array(
            'id login'        =>$id_login,
            'nama petugas'    =>$nama_petugas,

        );

        $this->petugas->input_data($data, 'petugas');
        redirect(site_url('petugas/index'));
    }
}
