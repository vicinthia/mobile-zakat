<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_zakat extends CI_Model
{
    public function generate_id()
    {
        $this->db->select('RIGHT(input_zakat.id,3) as kode', false);
        // $this->db->order_by('id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('input_zakat');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodejadi = "Z" . $kodemax;
        return $kodejadi;
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('input_zakat');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }


    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('input_zakat', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('input_zakat');
    }

    public function status($id)
    {
        $this->db->select('*');
        $this->db->from('input_zakat');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function aksi_status($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('input_zakat', $data);
    }

    public function detailpdf($id)
    {
        $this->db->select('*');
        $this->db->from('input_zakat');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }
}
