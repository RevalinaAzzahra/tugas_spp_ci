<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sppM extends CI_Model
{

    public function getSpp()
    {
        return $this->db->get('spp')->result_array();
    }
}
