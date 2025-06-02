<?php

class Rekapitulasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rekapzakat');
        $this->load->model('model_bulan/m_uangbulan');
        $this->load->model('model_bulan/m_berasbulan');
        $this->load->model('model_bulan/m_malbulan');
        $this->load->model('model_bulan/m_fidyahbulan');
        $this->load->model('model_bulan/m_infaqbulan');
        if($this->session->userdata('is_active') != "login"){
            redirect('panel');
        }
    }

    public function index()
    {
        $data['judul'] = 'Data Rekapitulasi Zakat';
        // $data['getzakat'] = $this->db->get('input_zakat')->result_array();
        $data['sum_totalAllAprMei'] = $this->m_rekapzakat->get_sumAprMei();
        $data['sum_totalAllAprMeiBeras'] = $this->m_rekapzakat->get_sumAprMeiberas();
        // $data['sum_totalAllMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
        $data['sum_totalAllAprMeiMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
        $data['sum_totalAllAprMeiFidyah'] = $this->m_rekapzakat->get_sumAprMeiFidyah();
        $data['sum_totalAllAprMeiInfaq'] = $this->m_rekapzakat->get_sumAprMeiInfaq();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/tabel_rekap', $data);
        $this->load->view('home/footer');
    }

    public function detailuang()
    {
        $data['judul'] = 'Detail Rekap Uang';
        $data['getzakat'] = $this->db->get("input_zakat where status = 'Telah Validasi' && uang != '0'")->result_array();
        $data['sum_totalAllAprMei'] = $this->m_rekapzakat->get_sumAprMei();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/detail_rekap', $data);
        $this->load->view('home/footer');
    }

    public function detailberas()
    {
        $data['judul'] = 'Detail Rekap Beras';
        $data['getzakat'] = $this->db->get("input_zakat where status = 'Telah Validasi' && beras != '0'")->result_array();
        $data['sum_totalAllAprMeiBeras'] = $this->m_rekapzakat->get_sumAprMeiberas();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/detail_beraszkt', $data);
        $this->load->view('home/footer');
    }

    public function maldetail()
    {
        $data['judul'] = 'Detail Rekap Mal';
        $data['getzakat'] = $this->db->get("input_zakat where status = 'Telah Validasi' && mal != '0'")->result_array();
        $data['sum_totalAllAprMeiMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/detail_malzkt', $data);
        $this->load->view('home/footer');
    }
    public function fidyahdetail()
    {
        $data['judul'] = 'Detail Rekap Fidyah';
        $data['getzakat'] = $this->db->get("input_zakat where status = 'Telah Validasi' && fidyah != '0'")->result_array();
        $data['sum_totalAllAprMeiFidyah'] = $this->m_rekapzakat->get_sumAprMeiFidyah();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/detail_fidyahzkt', $data);
        $this->load->view('home/footer');
    }
    public function infaqdetail()
    {
        $data['judul'] = 'Detail Rekap Fidyah';
        $data['getzakat'] = $this->db->get("input_zakat where status = 'Telah Validasi' && infaq != '0'")->result_array();
        $data['sum_totalAllAprMeiInfaq'] = $this->m_rekapzakat->get_sumAprMeiInfaq();
        $this->load->view('home/header', $data);
        $this->load->view('zakat/detail_infaqzkt', $data);
        $this->load->view('home/footer');
    }

    public function bulanuang()
    {

        $data['sum_totalAllJan'] = $this->m_uangbulan->get_sumJan();
        $data['sum_totalAllFeb'] = $this->m_uangbulan->get_sumFeb();
        $data['sum_totalAllMar'] = $this->m_uangbulan->get_sumMar();
        $data['sum_totalAllApr'] = $this->m_uangbulan->get_sumApr();
        $data['sum_totalAllMei'] = $this->m_uangbulan->get_sumMei();
        $data['sum_totalAllJun'] = $this->m_uangbulan->get_sumJun();
        $data['sum_totalAllJul'] = $this->m_uangbulan->get_sumJul();
        $data['sum_totalAllAug'] = $this->m_uangbulan->get_sumAug();
        $data['sum_totalAllSept'] = $this->m_uangbulan->get_sumSept();
        $data['sum_totalAllOct'] = $this->m_uangbulan->get_sumOct();
        $data['sum_totalAllNov'] = $this->m_uangbulan->get_sumNov();
        $data['sum_totalAllDes'] = $this->m_uangbulan->get_sumDes();


        $data['judul'] = 'Rekapitulasi Bulan';
        $data['getzakat'] = $this->db->get('input_zakat')->result_array();

        $this->load->view('home/header', $data);
        $this->load->view('zakat/bulan/tblbln_uang', $data);
        $this->load->view('home/footer');
    }

    public function bulanberas()
    {

        $data['sum_totalAllJan'] = $this->m_berasbulan->get_sumJan();
        $data['sum_totalAllFeb'] = $this->m_berasbulan->get_sumFeb();
        $data['sum_totalAllMar'] = $this->m_berasbulan->get_sumMar();
        $data['sum_totalAllApr'] = $this->m_berasbulan->get_sumApr();
        $data['sum_totalAllMei'] = $this->m_berasbulan->get_sumMei();
        $data['sum_totalAllJun'] = $this->m_berasbulan->get_sumJun();
        $data['sum_totalAllJul'] = $this->m_berasbulan->get_sumJul();
        $data['sum_totalAllAug'] = $this->m_berasbulan->get_sumAug();
        $data['sum_totalAllSept'] = $this->m_berasbulan->get_sumSept();
        $data['sum_totalAllOct'] = $this->m_berasbulan->get_sumOct();
        $data['sum_totalAllNov'] = $this->m_berasbulan->get_sumNov();
        $data['sum_totalAllDes'] = $this->m_berasbulan->get_sumDes();


        $data['judul'] = 'Rekapitulasi Bulan';
        $data['getzakat'] = $this->db->get('input_zakat')->result_array();

        $this->load->view('home/header', $data);
        $this->load->view('zakat/bulan/tblbln_beras', $data);
        $this->load->view('home/footer');
    }
    public function bulanmal()
    {

        $data['sum_totalAllJan'] = $this->m_malbulan->get_sumJan();
        $data['sum_totalAllFeb'] = $this->m_malbulan->get_sumFeb();
        $data['sum_totalAllMar'] = $this->m_malbulan->get_sumMar();
        $data['sum_totalAllApr'] = $this->m_malbulan->get_sumApr();
        $data['sum_totalAllMei'] = $this->m_malbulan->get_sumMei();
        $data['sum_totalAllJun'] = $this->m_malbulan->get_sumJun();
        $data['sum_totalAllJul'] = $this->m_malbulan->get_sumJul();
        $data['sum_totalAllAug'] = $this->m_malbulan->get_sumAug();
        $data['sum_totalAllSept'] = $this->m_malbulan->get_sumSept();
        $data['sum_totalAllOct'] = $this->m_malbulan->get_sumOct();
        $data['sum_totalAllNov'] = $this->m_malbulan->get_sumNov();
        $data['sum_totalAllDes'] = $this->m_malbulan->get_sumDes();


        $data['judul'] = 'Rekapitulasi Bulan';
        $data['getzakat'] = $this->db->get('input_zakat')->result_array();

        $this->load->view('home/header', $data);
        $this->load->view('zakat/bulan/tblbln_mal', $data);
        $this->load->view('home/footer');
    }
    public function bulanfidyah()
    {

        $data['sum_totalAllJan'] = $this->m_fidyahbulan->get_sumJan();
        $data['sum_totalAllFeb'] = $this->m_fidyahbulan->get_sumFeb();
        $data['sum_totalAllMar'] = $this->m_fidyahbulan->get_sumMar();
        $data['sum_totalAllApr'] = $this->m_fidyahbulan->get_sumApr();
        $data['sum_totalAllMei'] = $this->m_fidyahbulan->get_sumMei();
        $data['sum_totalAllJun'] = $this->m_fidyahbulan->get_sumJun();
        $data['sum_totalAllJul'] = $this->m_fidyahbulan->get_sumJul();
        $data['sum_totalAllAug'] = $this->m_fidyahbulan->get_sumAug();
        $data['sum_totalAllSept'] = $this->m_fidyahbulan->get_sumSept();
        $data['sum_totalAllOct'] = $this->m_fidyahbulan->get_sumOct();
        $data['sum_totalAllNov'] = $this->m_fidyahbulan->get_sumNov();
        $data['sum_totalAllDes'] = $this->m_fidyahbulan->get_sumDes();


        $data['judul'] = 'Rekapitulasi Bulan';
        $data['getzakat'] = $this->db->get('input_zakat')->result_array();

        $this->load->view('home/header', $data);
        $this->load->view('zakat/bulan/tblbln_fidyah', $data);
        $this->load->view('home/footer');
    }
    public function bulaninfaq()
    {

        $data['sum_totalAllJan'] = $this->m_infaqbulan->get_sumJan();
        $data['sum_totalAllFeb'] = $this->m_infaqbulan->get_sumFeb();
        $data['sum_totalAllMar'] = $this->m_infaqbulan->get_sumMar();
        $data['sum_totalAllApr'] = $this->m_infaqbulan->get_sumApr();
        $data['sum_totalAllMei'] = $this->m_infaqbulan->get_sumMei();
        $data['sum_totalAllJun'] = $this->m_infaqbulan->get_sumJun();
        $data['sum_totalAllJul'] = $this->m_infaqbulan->get_sumJul();
        $data['sum_totalAllAug'] = $this->m_infaqbulan->get_sumAug();
        $data['sum_totalAllSept'] = $this->m_infaqbulan->get_sumSept();
        $data['sum_totalAllOct'] = $this->m_infaqbulan->get_sumOct();
        $data['sum_totalAllNov'] = $this->m_infaqbulan->get_sumNov();
        $data['sum_totalAllDes'] = $this->m_infaqbulan->get_sumDes();


        $data['judul'] = 'Rekapitulasi Bulan';
        $data['getzakat'] = $this->db->get('input_zakat')->result_array();

        $this->load->view('home/header', $data);
        $this->load->view('zakat/bulan/tblbln_infaq', $data);
        $this->load->view('home/footer');
    }
}
