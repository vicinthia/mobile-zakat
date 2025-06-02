
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekapzakat');

        if($this->session->userdata('is_active') != "login"){
            redirect('panel');
        }
    }

    public function index()
    {
        
        $data['sum_totalAllAprMei'] = $this->m_rekapzakat->get_sumAprMei();
		$data['sum_totalAllAprMeiBeras'] = $this->m_rekapzakat->get_sumAprMeiberas();
		$data['sum_totalAllAprMeiMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
        $data['sum_totalAllAprMeiFidyah'] = $this->m_rekapzakat->get_sumAprMeiFidyah();
		$data['sum_totalAllAprMeiInfaq'] = $this->m_rekapzakat->get_sumAprMeiInfaq();

        $this->load->view('login', $data);
    }
}


