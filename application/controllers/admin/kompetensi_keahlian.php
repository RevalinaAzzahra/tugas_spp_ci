<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kompetensi_keahlian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kompetensi_keahlianM');
    }

    public function index()
    {
        $data['kompetensi_keahlian'] = $this->kompetensi_keahlianM->getKompetensi_keahlian();
        $this->load->view('admin/kompetensi_keahlian', $data);
    }
}
