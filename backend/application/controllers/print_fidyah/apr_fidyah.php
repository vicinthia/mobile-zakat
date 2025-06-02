<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Apr_fidyah extends CI_Controller
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
        $data['sum_totalAllAprFidyah'] = $this->m_rekappdf->get_sumAprFidyah();

        //////////////// DETAIL TRANSAKSI HARIAN ////////////////////////
        $data['sum_totalAprFidyah1'] = $this->m_hariApr->get_sumAprFidyah1();
        $data['sum_totalAprFidyah2'] = $this->m_hariApr->get_sumAprFidyah2();
        $data['sum_totalAprFidyah3'] = $this->m_hariApr->get_sumAprFidyah3();
        $data['sum_totalAprFidyah4'] = $this->m_hariApr->get_sumAprFidyah4();
        $data['sum_totalAprFidyah5'] = $this->m_hariApr->get_sumAprFidyah5();
        $data['sum_totalAprFidyah6'] = $this->m_hariApr->get_sumAprFidyah6();
        $data['sum_totalAprFidyah7'] = $this->m_hariApr->get_sumAprFidyah7();
        $data['sum_totalAprFidyah8'] = $this->m_hariApr->get_sumAprFidyah8();
        $data['sum_totalAprFidyah9'] = $this->m_hariApr->get_sumAprFidyah9();
        $data['sum_totalAprFidyah10'] = $this->m_hariApr->get_sumAprFidyah10();
        $data['sum_totalAprFidyah11'] = $this->m_hariApr->get_sumAprFidyah11();
        $data['sum_totalAprFidyah12'] = $this->m_hariApr->get_sumAprFidyah12();
        $data['sum_totalAprFidyah13'] = $this->m_hariApr->get_sumAprFidyah13();
        $data['sum_totalAprFidyah14'] = $this->m_hariApr->get_sumAprFidyah14();
        $data['sum_totalAprFidyah15'] = $this->m_hariApr->get_sumAprFidyah15();
        $data['sum_totalAprFidyah16'] = $this->m_hariApr->get_sumAprFidyah16();
        $data['sum_totalAprFidyah17'] = $this->m_hariApr->get_sumAprFidyah17();
        $data['sum_totalAprFidyah18'] = $this->m_hariApr->get_sumAprFidyah18();
        $data['sum_totalAprFidyah19'] = $this->m_hariApr->get_sumAprFidyah19();
        $data['sum_totalAprFidyah20'] = $this->m_hariApr->get_sumAprFidyah20();
        $data['sum_totalAprFidyah21'] = $this->m_hariApr->get_sumAprFidyah21();
        $data['sum_totalAprFidyah22'] = $this->m_hariApr->get_sumAprFidyah22();
        $data['sum_totalAprFidyah23'] = $this->m_hariApr->get_sumAprFidyah23();
        $data['sum_totalAprFidyah24'] = $this->m_hariApr->get_sumAprFidyah24();
        $data['sum_totalAprFidyah25'] = $this->m_hariApr->get_sumAprFidyah25();
        $data['sum_totalAprFidyah26'] = $this->m_hariApr->get_sumAprFidyah26();
        $data['sum_totalAprFidyah27'] = $this->m_hariApr->get_sumAprFidyah27();
        $data['sum_totalAprFidyah28'] = $this->m_hariApr->get_sumAprFidyah28();
        $data['sum_totalAprFidyah29'] = $this->m_hariApr->get_sumAprFidyah29();
        $data['sum_totalAprFidyah30'] = $this->m_hariApr->get_sumAprFidyah30();

        // $data['sum_totalAllAprMeiBeras'] = $this->m_rekappdf->get_sumAprMalMeiberas();
        // $data['sum_totalAllAprMeiMal'] = $this->m_rekappdf->get_sumAprMalMeiMal();


        $html = $this->load->view('zakat/cetakrekap/fidyah_apr', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
