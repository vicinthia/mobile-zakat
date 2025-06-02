<?php

class Harga_model extends CI_Model
{
    public function getAllHarga($id = null)
    {
        if ($id === null) {
            return $this->db->get('tabel_harga')->result_array();
        } else {
            return $this->db->get_where('tabel_harga', ['id' => $id])->result_array();
        }
    }

    public function deleteHarga($id)
    {
        $this->db->delete('tabel_harga', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createHarga($data)
    {
        $this->db->insert('tabel_harga', $data);
        return $this->db->affected_rows();
    }

    public function updateHarga($data, $id)
    {
        $this->db->update('tabel_harga', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
