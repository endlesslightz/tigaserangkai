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

    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('users')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_detail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('users')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
}
