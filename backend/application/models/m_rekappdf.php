<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekappdf extends CI_Model
{
    public function detailuangpdf($id)
    {
        $this->db->select('*');
        $this->db->from('input_zakat');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    // SUM uang PER - BULAN //
    public function get_sumApr()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprFidyah()
    {
        $this->db->select_sum('fidyah');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprInfaq()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
}
