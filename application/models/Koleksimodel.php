<?php
class Koleksimodel extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_koleksi()
    {
        return $this->db->get('koleksis')->result_array();
    }

    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('koleksis')->row_array();
    }
}
