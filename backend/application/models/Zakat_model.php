<?php

class Zakat_model extends CI_Model
{
    public function getAllBayar($id = null)
    {
        if ($id === null) {
            return $this->db->get('input_zakat')->result_array();
        } else {
            return $this->db->get_where('input_zakat', ['id' => $id])->result_array();
        }
    }

    public function deleteBayar($id)
    {
        $this->db->delete('input_zakat', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createBayar($data)
    {
        $this->db->insert('input_zakat', $data);
        return $this->db->affected_rows();
    }

    public function updateBayar($data, $id)
    {
        $this->db->update('input_zakat', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
