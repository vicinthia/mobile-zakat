<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Apr_infaq extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekappdf');
        $this->load->model('model_detailbulan/m_hariApr');
    }

    public function index()
    {
        $mpdf = new \Mpdf\Mpdf(['tempDir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf']);
        $mpdf->showImageErrors = true;
        // $data['getdata'] = $this->m_rekappdf->detailuangpdf($id);
        $data['sum_totalAllAprInfaq'] = $this->m_rekappdf->get_sumAprInfaq();

        //////////////// DETAIL TRANSAKSI HARIAN ////////////////////////
        $data['sum_totalAprInfaq1'] = $this->m_hariApr->get_sumAprInfaq1();
        $data['sum_totalAprInfaq2'] = $this->m_hariApr->get_sumAprInfaq2();
        $data['sum_totalAprInfaq3'] = $this->m_hariApr->get_sumAprInfaq3();
        $data['sum_totalAprInfaq4'] = $this->m_hariApr->get_sumAprInfaq4();
        $data['sum_totalAprInfaq5'] = $this->m_hariApr->get_sumAprInfaq5();
        $data['sum_totalAprInfaq6'] = $this->m_hariApr->get_sumAprInfaq6();
        $data['sum_totalAprInfaq7'] = $this->m_hariApr->get_sumAprInfaq7();
        $data['sum_totalAprInfaq8'] = $this->m_hariApr->get_sumAprInfaq8();
        $data['sum_totalAprInfaq9'] = $this->m_hariApr->get_sumAprInfaq9();
        $data['sum_totalAprInfaq10'] = $this->m_hariApr->get_sumAprInfaq10();
        $data['sum_totalAprInfaq11'] = $this->m_hariApr->get_sumAprInfaq11();
        $data['sum_totalAprInfaq12'] = $this->m_hariApr->get_sumAprInfaq12();
        $data['sum_totalAprInfaq13'] = $this->m_hariApr->get_sumAprInfaq13();
        $data['sum_totalAprInfaq14'] = $this->m_hariApr->get_sumAprInfaq14();
        $data['sum_totalAprInfaq15'] = $this->m_hariApr->get_sumAprInfaq15();
        $data['sum_totalAprInfaq16'] = $this->m_hariApr->get_sumAprInfaq16();
        $data['sum_totalAprInfaq17'] = $this->m_hariApr->get_sumAprInfaq17();
        $data['sum_totalAprInfaq18'] = $this->m_hariApr->get_sumAprInfaq18();
        $data['sum_totalAprInfaq19'] = $this->m_hariApr->get_sumAprInfaq19();
        $data['sum_totalAprInfaq20'] = $this->m_hariApr->get_sumAprInfaq20();
        $data['sum_totalAprInfaq21'] = $this->m_hariApr->get_sumAprInfaq21();
        $data['sum_totalAprInfaq22'] = $this->m_hariApr->get_sumAprInfaq22();
        $data['sum_totalAprInfaq23'] = $this->m_hariApr->get_sumAprInfaq23();
        $data['sum_totalAprInfaq24'] = $this->m_hariApr->get_sumAprInfaq24();
        $data['sum_totalAprInfaq25'] = $this->m_hariApr->get_sumAprInfaq25();
        $data['sum_totalAprInfaq26'] = $this->m_hariApr->get_sumAprInfaq26();
        $data['sum_totalAprInfaq27'] = $this->m_hariApr->get_sumAprInfaq27();
        $data['sum_totalAprInfaq28'] = $this->m_hariApr->get_sumAprInfaq28();
        $data['sum_totalAprInfaq29'] = $this->m_hariApr->get_sumAprInfaq29();
        $data['sum_totalAprInfaq30'] = $this->m_hariApr->get_sumAprInfaq30();

        // $data['sum_totalAllAprMeiBeras'] = $this->m_rekappdf->get_sumAprMalMeiberas();
        // $data['sum_totalAllAprMeiMal'] = $this->m_rekappdf->get_sumAprMalMeiMal();


        $html = $this->load->view('zakat/cetakrekap/infaq_apr', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
