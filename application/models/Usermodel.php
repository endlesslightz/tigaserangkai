<?php
class Usermodel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_user()
    {
        $query = $this->db->query("SELECT * FROM users");
        return $query->result_array();
    }

    function get_user2()
    {
        return $this->db->get('users')->result_array();
    }
}
