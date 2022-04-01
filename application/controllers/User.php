<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index()
    {
        $data['list'] = $this->usermodel->get_user2();
        $this->load->view('user', $data);
    }
}
