<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_infaqbulan extends CI_Model
{


    /// JANUARI ///
    public function getJan()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-01-31' and tgl >= '2023-01-01'");
        return $query->result();
    }
    public function get_sumJan()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-01-32' and tgl >= '2023-01-01'");
        return $this->db->get('')->row();
    }

    /// FEBRUARI ///
    public function getFeb()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-02-28' and tgl >= '2023-02-01'");
        return $query->result();
    }
    public function get_sumFeb()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-02-29' and tgl >= '2023-02-01'");
        return $this->db->get('')->row();
    }

    /// MARET ///
    public function getMar()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-03-31' and tgl >= '2023-03-01'");
        return $query->result();
    }
    public function get_sumMar()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-03-32' and tgl >= '2023-03-01'");
        return $this->db->get('')->row();
    }

    /// APRIL ///
    public function getApr()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-04-30' and tgl >= '2023-04-01'");
        return $query->result();
    }
    public function get_sumApr()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-04-31' and tgl >= '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }

    /// MEI ///
    public function getMei()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-05-31' and tgl >= '2023-05-01'");
        return $query->result();
    }
    public function get_sumMei()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-05-32' and tgl >= '2023-05-01'");
        return $this->db->get('')->row();
    }

    /// JUNI ///
    public function getJun()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-06-30' and tgl >= '2023-06-01'");
        return $query->result();
    }
    public function get_sumJun()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-06-31' and tgl >= '2023-06-01'");
        return $this->db->get('')->row();
    }

    /// JULI ///
    public function getJul()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-07-31' and tgl >= '2023-07-01'");
        return $query->result();
    }
    public function get_sumJul()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-07-32' and tgl >= '2023-07-01'");
        return $this->db->get('')->row();
    }

    /// AGUSTUS ///
    public function getAug()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-08-31' and tgl >= '2023-08-01'");
        return $query->result();
    }
    public function get_sumAug()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-08-32' and tgl >= '2023-08-01'");
        return $this->db->get('')->row();
    }

    /// SEPTEMBER ///
    public function getSept()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-09-30' and tgl >= '2023-09-01'");
        return $query->result();
    }
    public function get_sumSept()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-09-31' and tgl >= '2023-09-01'");
        return $this->db->get('')->row();
    }

    /// OKTOBER ///
    public function getOct()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-10-31' and tgl >= '2023-10-01'");
        return $query->result();
    }
    public function get_sumOct()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-10-32' and tgl >= '2023-10-01'");
        return $this->db->get('')->row();
    }

    /// NOVEMBER ///
    public function getNov()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-11-30' and tgl >= '2023-11-01'");
        return $query->result();
    }
    public function get_sumNov()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-11-31' and tgl >= '2023-11-01'");
        return $this->db->get('')->row();
    }

    /// DESEMBER ///
    public function getDes()
    {
        $query = $this->db->query("select*from input_zakat where tgl <= '2023-12-31' and tgl >= '2023-12-01'");
        return $query->result();
    }
    public function get_sumDes()
    {
        $this->db->select_sum('infaq');
        $this->db->from("input_zakat where tgl <= '2023-12-32' and tgl >= '2023-12-01'");
        return $this->db->get('')->row();
    }
}
