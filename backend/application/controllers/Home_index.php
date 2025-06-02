<?php

class home_index extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		if($this->session->userdata('is_active') != "login"){
            redirect('panel');
        }
    }


	public function index()
	{
		$data['judul'] = 'Home';
		// $data['admin'] = $this->db->get_where('username', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('home/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('home/footer');
	}
}
