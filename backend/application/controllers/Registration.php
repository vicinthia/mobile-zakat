<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('registrasi');
    }

    public function daftarakun()
    {
    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('login');
    //     } else {
    //         $data = [
    //             'username' => htmlspecialchars($this->input->post('username', true)),
    //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //             'date_created' => time()
    //         ];

    //         $this->db->insert('admin', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat anda berhasil terdaftar! Silahkan Login</div>');
    //         redirect('panel');
    //     }

    // }
    $data = array(
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => $this->input->post('password') ,
    );
    $query = $this->db->insert('admin', $data);
    if ($query = true) {
        $this->session->set_flashdata('info', 'Berhasil Registrasi');
        redirect('panel');
    }
        return $query;
    }
}
