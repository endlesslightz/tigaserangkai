<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['nama'] = 'budi waluyo';
        $data['alamat'] = 'Kartosuro';
        $data['email'] = 'budi@waluyo.com';
        $data['hobi'] = ['Menjahit', 'Membaca', 'Menulis', 'Memasak'];
        $this->load->view('dashboard', $data);
    }
}
