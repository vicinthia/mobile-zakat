<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

class Detailday extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekappdf');
    }

    public function detailuang()
    {
        $mpdf = new \Mpdf\Mpdf(['tempDir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf']);
        $mpdf->showImageErrors = true;
        // $data['getdata'] = $this->m_rekappdf->detailuangpdf($id);
        $data['sum_totalAllApr'] = $this->m_rekappdf->get_sumApr();

        //////////////// DETAIL TRANSAKSI HARIAN ////////////////////////
        $data['sum_totalApr1'] = $this->m_rekappdf->get_sumApr1();
        $data['sum_totalApr2'] = $this->m_rekappdf->get_sumApr2();
        $data['sum_totalApr3'] = $this->m_rekappdf->get_sumApr3();
        $data['sum_totalApr4'] = $this->m_rekappdf->get_sumApr4();
        $data['sum_totalApr5'] = $this->m_rekappdf->get_sumApr5();
        $data['sum_totalApr6'] = $this->m_rekappdf->get_sumApr6();
        $data['sum_totalApr7'] = $this->m_rekappdf->get_sumApr7();
        $data['sum_totalApr8'] = $this->m_rekappdf->get_sumApr8();
        $data['sum_totalApr9'] = $this->m_rekappdf->get_sumApr9();
        $data['sum_totalApr10'] = $this->m_rekappdf->get_sumApr10();
        $data['sum_totalApr11'] = $this->m_rekappdf->get_sumApr11();
        $data['sum_totalApr12'] = $this->m_rekappdf->get_sumApr12();
        $data['sum_totalApr13'] = $this->m_rekappdf->get_sumApr13();
        $data['sum_totalApr14'] = $this->m_rekappdf->get_sumApr14();
        $data['sum_totalApr15'] = $this->m_rekappdf->get_sumApr15();
        $data['sum_totalApr16'] = $this->m_rekappdf->get_sumApr16();
        $data['sum_totalApr17'] = $this->m_rekappdf->get_sumApr17();
        $data['sum_totalApr18'] = $this->m_rekappdf->get_sumApr18();
        $data['sum_totalApr19'] = $this->m_rekappdf->get_sumApr19();
        $data['sum_totalApr20'] = $this->m_rekappdf->get_sumApr20();
        $data['sum_totalApr21'] = $this->m_rekappdf->get_sumApr21();
        $data['sum_totalApr22'] = $this->m_rekappdf->get_sumApr22();
        $data['sum_totalApr23'] = $this->m_rekappdf->get_sumApr23();
        $data['sum_totalApr24'] = $this->m_rekappdf->get_sumApr24();
        $data['sum_totalApr25'] = $this->m_rekappdf->get_sumApr25();
        $data['sum_totalApr26'] = $this->m_rekappdf->get_sumApr26();
        $data['sum_totalApr27'] = $this->m_rekappdf->get_sumApr27();
        $data['sum_totalApr28'] = $this->m_rekappdf->get_sumApr28();
        $data['sum_totalApr29'] = $this->m_rekappdf->get_sumApr29();
        $data['sum_totalApr30'] = $this->m_rekappdf->get_sumApr30();

        // $data['sum_totalAllAprMeiBeras'] = $this->m_rekappdf->get_sumAprMeiberas();
        // $data['sum_totalAllAprMeiMal'] = $this->m_rekappdf->get_sumAprMeiMal();


        $html = $this->load->view('zakat/cetakrekap/cetakuang', $data, true);

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
