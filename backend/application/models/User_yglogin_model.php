<?php

class User_yglogin_model extends CI_Model
{
    public function getAllBayar($id = null)
    {
        if ($id === null) {
            return $this->db->get('tabel_userlogin')->result_array();
        } else {
            return $this->db->get_where('tabel_userlogin', ['id' => $id])->result_array();
        }
    }

    public function deleteBayar($id)
    {
        $this->db->delete('tabel_userlogin', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createBayar($data)
    {
        $this->db->insert('tabel_userlogin', $data);
        return $this->db->affected_rows();
    }

    public function updateBayar($data, $id)
    {
        $this->db->update('tabel_userlogin', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
