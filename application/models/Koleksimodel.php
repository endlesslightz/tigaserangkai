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

    function insert($a, $cover)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksis', $data);
    }

    function update($a, $id, $cover = null)
    {
        if ($cover == 1) {
            $data = [
                'cover' => $a
            ];
        } else {
            $data = [
                'judul' => $a['judul'],
                'penulis' => $a['penulis'],
                'penerbit' => $a['penerbit']
            ];
        }
        $this->db->where('id', $id);
        return $this->db->update('koleksis', $data);
    }


    function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('koleksis');
    }
}
