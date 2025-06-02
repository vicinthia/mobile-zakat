<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_rekapzakat extends CI_Model
{
    /// APRIL ///
    public function getApr()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-04-30' and tgl >= '2023-04-01'");
        return $query->result();
    }
    public function get_sumAprMei()
    {
        $this->db->select_sum('uang');
        // $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-04-01'");
        $this->db->from("input_zakat where status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_summejaApr()
    {
        $this->db->select_sum('meja');
        $this->db->from("input_zakat where tgl <= '2023-04-30' and tgl >= '2023-04-01'");
        return $this->db->get('')->row();
    }

    // BERAS //
    public function getAprberas()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-04-30' and tgl >= '2023-04-01'");
        return $query->result();
    }
    public function get_sumAprMeiberas()
    {
        $this->db->select_sum('beras');
        // $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-04-01'");
        $this->db->from("input_zakat where status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_summejaAprberas()
    {
        $this->db->select_sum('meja');
        $this->db->from("input_zakat where tgl <= '2023-04-30' and tgl >= '2023-04-01'");
        return $this->db->get('')->row();
    }

    // ZAKAT MAL //
    public function get_sumAprMeiMal()
    {
        $this->db->select_sum('mal');
        // $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-04-01'");
        $this->db->from("input_zakat where status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }

    // ZAKAT FIDYAH //
    public function get_sumAprMeiFidyah()
    {
        $this->db->select_sum('fidyah');
        // $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-04-01'");
        $this->db->from("input_zakat where status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }

    // INFAQ //
    public function get_sumAprMeiInfaq()
    {
        $this->db->select_sum('infaq');
        // $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-04-01'");
        $this->db->from("input_zakat where status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
}
