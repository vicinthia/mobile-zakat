<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Apr_mal extends CI_Controller
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
        $data['sum_totalAllAprMal'] = $this->m_rekappdf->get_sumAprMal();

        //////////////// DETAIL TRANSAKSI HARIAN ////////////////////////
        $data['sum_totalAprMal1'] = $this->m_hariApr->get_sumAprMal1();
        $data['sum_totalAprMal2'] = $this->m_hariApr->get_sumAprMal2();
        $data['sum_totalAprMal3'] = $this->m_hariApr->get_sumAprMal3();
        $data['sum_totalAprMal4'] = $this->m_hariApr->get_sumAprMal4();
        $data['sum_totalAprMal5'] = $this->m_hariApr->get_sumAprMal5();
        $data['sum_totalAprMal6'] = $this->m_hariApr->get_sumAprMal6();
        $data['sum_totalAprMal7'] = $this->m_hariApr->get_sumAprMal7();
        $data['sum_totalAprMal8'] = $this->m_hariApr->get_sumAprMal8();
        $data['sum_totalAprMal9'] = $this->m_hariApr->get_sumAprMal9();
        $data['sum_totalAprMal10'] = $this->m_hariApr->get_sumAprMal10();
        $data['sum_totalAprMal11'] = $this->m_hariApr->get_sumAprMal11();
        $data['sum_totalAprMal12'] = $this->m_hariApr->get_sumAprMal12();
        $data['sum_totalAprMal13'] = $this->m_hariApr->get_sumAprMal13();
        $data['sum_totalAprMal14'] = $this->m_hariApr->get_sumAprMal14();
        $data['sum_totalAprMal15'] = $this->m_hariApr->get_sumAprMal15();
        $data['sum_totalAprMal16'] = $this->m_hariApr->get_sumAprMal16();
        $data['sum_totalAprMal17'] = $this->m_hariApr->get_sumAprMal17();
        $data['sum_totalAprMal18'] = $this->m_hariApr->get_sumAprMal18();
        $data['sum_totalAprMal19'] = $this->m_hariApr->get_sumAprMal19();
        $data['sum_totalAprMal20'] = $this->m_hariApr->get_sumAprMal20();
        $data['sum_totalAprMal21'] = $this->m_hariApr->get_sumAprMal21();
        $data['sum_totalAprMal22'] = $this->m_hariApr->get_sumAprMal22();
        $data['sum_totalAprMal23'] = $this->m_hariApr->get_sumAprMal23();
        $data['sum_totalAprMal24'] = $this->m_hariApr->get_sumAprMal24();
        $data['sum_totalAprMal25'] = $this->m_hariApr->get_sumAprMal25();
        $data['sum_totalAprMal26'] = $this->m_hariApr->get_sumAprMal26();
        $data['sum_totalAprMal27'] = $this->m_hariApr->get_sumAprMal27();
        $data['sum_totalAprMal28'] = $this->m_hariApr->get_sumAprMal28();
        $data['sum_totalAprMal29'] = $this->m_hariApr->get_sumAprMal29();
        $data['sum_totalAprMal30'] = $this->m_hariApr->get_sumAprMal30();

        // $data['sum_totalAllAprMeiBeras'] = $this->m_rekappdf->get_sumAprMalMeiberas();
        // $data['sum_totalAllAprMeiMal'] = $this->m_rekappdf->get_sumAprMalMeiMal();


        $html = $this->load->view('zakat/cetakrekap/mal_apr', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
