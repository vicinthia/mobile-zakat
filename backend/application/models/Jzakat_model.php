<?php

class Jzakat_model extends CI_Model
{
    public function getAllBayar($id = null)
    {
        if ($id === null) {
            return $this->db->get('jenis_zakat')->result_array();
        } else {
            return $this->db->get_where('jenis_zakat', ['id' => $id])->result_array();
        }
    }

    public function deleteBayar($id)
    {
        $this->db->delete('jenis_zakat', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createBayar($data)
    {
        $this->db->insert('jenis_zakat', $data);
        return $this->db->affected_rows();
    }

    public function updateBayar($data, $id)
    {
        $this->db->update('jenis_zakat', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
