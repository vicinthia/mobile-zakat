<?php
defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';



class Cekpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_zakat');
        $this->load->model('sum_bukti');
    }

    public function cetakpdf($id)
    {
        // $mpdf = new \Mpdf\Mpdf();


        $mpdf = new \Mpdf\Mpdf(['tempDir' => sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'mpdf']);
        $mpdf->showImageErrors = true;
        // $mpdf->AddPage('L', '', '', '', '', 50, 50, 5, 50, 10, 10);
        $mpdf->AddPage('P', 'utf-8', 'A5', '', '', '', '', 5, 5, 5, 5, 5, 5);
        $data['getdata'] = $this->m_zakat->detailpdf($id);
        $data['gettotal'] = $this->sum_bukti->get_total($id);
        // $data['gettotal'] = $this->sum_bukti->get_total($id);
        $html = $this->load->view('pembayaran/bukti', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
