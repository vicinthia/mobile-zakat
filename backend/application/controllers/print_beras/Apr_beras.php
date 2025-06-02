<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Apr_beras extends CI_Controller
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
        $data['sum_totalAllBerasApr'] = $this->m_rekappdf->get_sumAprBeras();

        //////////////// DETAIL TRANSAKSI HARIAN ////////////////////////
        $data['sum_totalAprBeras1'] = $this->m_hariApr->get_sumAprBeras1();
        $data['sum_totalAprBeras2'] = $this->m_hariApr->get_sumAprBeras2();
        $data['sum_totalAprBeras3'] = $this->m_hariApr->get_sumAprBeras3();
        $data['sum_totalAprBeras4'] = $this->m_hariApr->get_sumAprBeras4();
        $data['sum_totalAprBeras5'] = $this->m_hariApr->get_sumAprBeras5();
        $data['sum_totalAprBeras6'] = $this->m_hariApr->get_sumAprBeras6();
        $data['sum_totalAprBeras7'] = $this->m_hariApr->get_sumAprBeras7();
        $data['sum_totalAprBeras8'] = $this->m_hariApr->get_sumAprBeras8();
        $data['sum_totalAprBeras9'] = $this->m_hariApr->get_sumAprBeras9();
        $data['sum_totalAprBeras10'] = $this->m_hariApr->get_sumAprBeras10();
        $data['sum_totalAprBeras11'] = $this->m_hariApr->get_sumAprBeras11();
        $data['sum_totalAprBeras12'] = $this->m_hariApr->get_sumAprBeras12();
        $data['sum_totalAprBeras13'] = $this->m_hariApr->get_sumAprBeras13();
        $data['sum_totalAprBeras14'] = $this->m_hariApr->get_sumAprBeras14();
        $data['sum_totalAprBeras15'] = $this->m_hariApr->get_sumAprBeras15();
        $data['sum_totalAprBeras16'] = $this->m_hariApr->get_sumAprBeras16();
        $data['sum_totalAprBeras17'] = $this->m_hariApr->get_sumAprBeras17();
        $data['sum_totalAprBeras18'] = $this->m_hariApr->get_sumAprBeras18();
        $data['sum_totalAprBeras19'] = $this->m_hariApr->get_sumAprBeras19();
        $data['sum_totalAprBeras20'] = $this->m_hariApr->get_sumAprBeras20();
        $data['sum_totalAprBeras21'] = $this->m_hariApr->get_sumAprBeras21();
        $data['sum_totalAprBeras22'] = $this->m_hariApr->get_sumAprBeras22();
        $data['sum_totalAprBeras23'] = $this->m_hariApr->get_sumAprBeras23();
        $data['sum_totalAprBeras24'] = $this->m_hariApr->get_sumAprBeras24();
        $data['sum_totalAprBeras25'] = $this->m_hariApr->get_sumAprBeras25();
        $data['sum_totalAprBeras26'] = $this->m_hariApr->get_sumAprBeras26();
        $data['sum_totalAprBeras27'] = $this->m_hariApr->get_sumAprBeras27();
        $data['sum_totalAprBeras28'] = $this->m_hariApr->get_sumAprBeras28();
        $data['sum_totalAprBeras29'] = $this->m_hariApr->get_sumAprBeras29();
        $data['sum_totalAprBeras30'] = $this->m_hariApr->get_sumAprBeras30();

        // $data['sum_totalAllAprMeiBeras'] = $this->m_rekappdf->get_sumAprBerasMeiberas();
        // $data['sum_totalAllAprMeiMal'] = $this->m_rekappdf->get_sumAprBerasMeiMal();


        $html = $this->load->view('zakat/cetakrekap/beras_apr', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
