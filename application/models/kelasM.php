<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelasM extends CI_Model
{

    public function getKelas()
    {
        $this->db->select('*');
        $this->db->from('kompetensi_keahlian');
        $this->db->join('kelas' , 'kelas.id_kk=kompetensi_keahlian.id_kk');
        $query = $this->db->get();
        // var_dump($query->result_array());die;
        return $query->result_array();
         
    }
}
