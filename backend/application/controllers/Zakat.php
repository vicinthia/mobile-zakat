<?php 

class Zakat extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'Data Zakat';
		$this->load->view('home/header', $data);
		$this->load->view('Zakat/index', $data);
		$this->load->view('home/footer');
	}

	public function detail()
	{
		$data['judul'] = 'Detail Zakat';
		$this->load->view('home/header', $data);
		$this->load->view('Zakat/detail', $data);
		$this->load->view('home/footer');
	}
	
	public function tambah()
	{
		$data['judul'] = 'Tambah Zakat';
		$this->load->view('home/header', $data);
		$this->load->view('Zakat/tambah',$data);
		$this->load->view('home/footer');
	}

    public function hapus(){
		
	}

	public function form_edit()
	{
		$data['judul'] = 'Detail Zakat';
		$this->load->view('home/header', $data);
		$this->load->view('Zakat/form_edit', $data);
		$this->load->view('home/footer');
	}


}