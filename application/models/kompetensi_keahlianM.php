<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompetensi_keahlianM extends CI_Model
{

    public function getKompetensi_keahlian()
    {
        return $this->db->get('kompetensi_keahlian')->result_array();
    }
}
