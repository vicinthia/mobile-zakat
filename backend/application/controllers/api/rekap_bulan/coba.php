<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class coba extends REST_Controller
{
    public function getTotal()
    {
        $this->db->select_sum('total');
        $result = $this->db->get('transaksi')->row();
        return $result->total;
    }
}
