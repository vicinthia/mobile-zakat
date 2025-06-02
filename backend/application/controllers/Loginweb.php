<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginweb extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('ses_mlogin');
        $this->load->model('m_rekapzakat');
    }



    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
   

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
       
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->ses_mlogin->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'username' => $username,
                'is_active' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect('home_index');
 
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role"alert">Username atau Password Anda Salah!</div>');
            redirect('panel');
        }
    }
}
