<?php

class login2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('auth/v_login');
    }

    public function myLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $dataAdmin = array();

        $dataLogin = $this->db->query("SELECT * FROM staff WHERE username = '" . $username . "' and password = '" . $password . "'");


        foreach ($dataLogin->result() as $dl) {
            $dataAdmin[] = $dl;
            redirect(base_url('/home/halaman_transaksi_admin'));
        }

        // echo json_encode($dataAdmin);
        $this->load->view('auth/v_login');
    }

    public function logout()
    {
        $this->load->view('auth/v_login');
    }
}
