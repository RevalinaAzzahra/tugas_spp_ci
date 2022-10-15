<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaranM extends CI_Model
{

    public function getPembayaran()
    {
        return $this->db->get('pembayaran')->result_array();
    }
}
