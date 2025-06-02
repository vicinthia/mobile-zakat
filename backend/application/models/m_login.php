<?php

class M_login extends CI_Model
{

    function cek_login($data)
    {
        return $this->db->get_where('admin', $data);
    }
}
