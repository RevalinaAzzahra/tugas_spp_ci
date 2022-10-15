<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pembayaranM');
    }

    public function index()
    {
        $data['pembayaran'] = $this->pembayaranM->getPembayaran();
        $this->load->view('admin/pembayaran', $data);
    }
}
