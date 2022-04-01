<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('koleksimodel');
    }

    public function index()
    {
        $data['list'] = $this->koleksimodel->get_koleksi();
        $this->load->view('koleksi', $data);
    }

    public function detail($a = null)
    {
        $data['detail'] = $this->koleksimodel->get_detail($a);
        $this->load->view('detail', $data);
    }
}
