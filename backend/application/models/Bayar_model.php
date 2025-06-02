<?php

class Bayar_model extends CI_Model
{
    public function getAllBayar($id = null)
    {
        if ($id === null) {
            return $this->db->get('tabel_bayar')->result_array();
        } else {
            return $this->db->get_where('tabel_bayar', ['id' => $id])->result_array();
        }
    }

    public function deleteBayar($id)
    {
        $this->db->delete('tabel_bayar', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createBayar($data)
    {
        $this->db->insert('tabel_bayar', $data);
        return $this->db->affected_rows();
    }

    public function updateBayar($data, $id)
    {
        $this->db->update('tabel_bayar', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
