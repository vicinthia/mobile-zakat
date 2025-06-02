<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Sum_bukti extends CI_Model
{
    public function get_total($id)
    {
        // $this->db->select_sum("uang + ");
        
        // $this->db->select('SUM(uang) + SUM(mal) + SUM(fidyah) + SUM(infaq)' as total, FALSE);
        // $this->db->SELECT(SUM('uang'+'mal'));
        // $this->db->from("input_zakat");
        // return $this->db->get('')->row();
        $this->db->query("SELECT SUM('uang + mal + fidyah + infaq')");
        $this->db->from("input_zakat where id = '$id'");
        return $this->db->get('')->row();
    }


}