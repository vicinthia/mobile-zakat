<?php

class loginAdmin extends CI_Controller
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
        $this->load->view('auth/v_login_web');
    }

    public function myLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $dataAdmin = array();

        $dataLogin = $this->db->query("SELECT * FROM admin WHERE username = '" . $username . "' and password = '" . $password . "'");


        foreach ($dataLogin->result() as $dl) {
            $dataAdmin[] = $dl;
            redirect(base_url('/home/masukAdmin/'));
        }

        // echo json_encode($dataAdmin);
        $this->load->view('auth/v_login_web');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('loginAdmin'));
    }
}
