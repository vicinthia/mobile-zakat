<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekapHarian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekapHari/H_Jan');
        $this->load->model('rekapHari/H_Feb');
        $this->load->model('rekapHari/H_Mar');
        $this->load->model('rekapHari/H_Apr');
        $this->load->model('rekapHari/H_Mei');
        $this->load->model('rekapHari/H_Jun');
        $this->load->model('rekapHari/H_Jul');
        $this->load->model('rekapHari/H_Aug');
        $this->load->model('rekapHari/H_Sept');
        $this->load->model('rekapHari/H_Oct');
        $this->load->model('rekapHari/H_Nov');
        $this->load->model('rekapHari/H_Sept');
        $this->load->model('rekapHari/H_Des');
        $this->load->library("pagination");
    }

    //////////////// REKAP DETAIL TRANSAKSI / HARIAN //////////////////

    ///// JANUARI //////
    public function rekapHarianJan1()
    {
        $data['data'] = $this->H_Jan->get_select1();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan2()
    {
        $data['data'] = $this->H_Jan->get_select2();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan3()
    {
        $data['data'] = $this->H_Jan->get_select3();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan4()
    {
        $data['data'] = $this->H_Jan->get_select4();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan5()
    {
        $data['data'] = $this->H_Jan->get_select5();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan6()
    {
        $data['data'] = $this->H_Jan->get_select6();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan7()
    {
        $data['data'] = $this->H_Jan->get_select7();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan8()
    {
        $data['data'] = $this->H_Jan->get_select8();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan9()
    {
        $data['data'] = $this->H_Jan->get_select9();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan10()
    {
        $data['data'] = $this->H_Jan->get_select10();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan11()
    {
        $data['data'] = $this->H_Jan->get_select11();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan12()
    {
        $data['data'] = $this->H_Jan->get_select12();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan13()
    {
        $data['data'] = $this->H_Jan->get_select13();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan14()
    {
        $data['data'] = $this->H_Jan->get_select14();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan15()
    {
        $data['data'] = $this->H_Jan->get_select15();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan16()
    {
        $data['data'] = $this->H_Jan->get_select16();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan17()
    {
        $data['data'] = $this->H_Jan->get_select17();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan18()
    {
        $data['data'] = $this->H_Jan->get_select18();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan19()
    {
        $data['data'] = $this->H_Jan->get_select19();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan20()
    {
        $data['data'] = $this->H_Jan->get_select20();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan21()
    {
        $data['data'] = $this->H_Jan->get_select21();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan22()
    {
        $data['data'] = $this->H_Jan->get_select22();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan23()
    {
        $data['data'] = $this->H_Jan->get_select23();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan24()
    {
        $data['data'] = $this->H_Jan->get_select24();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan25()
    {
        $data['data'] = $this->H_Jan->get_select25();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan26()
    {
        $data['data'] = $this->H_Jan->get_select26();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan27()
    {
        $data['data'] = $this->H_Jan->get_select27();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan28()
    {
        $data['data'] = $this->H_Jan->get_select28();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan29()
    {
        $data['data'] = $this->H_Jan->get_select29();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan30()
    {
        $data['data'] = $this->H_Jan->get_select30();
        $this->load->view('detail_hari/detail_hjan', $data);
    }
    public function rekapHarianJan31()
    {
        $data['data'] = $this->H_Jan->get_select31();
        $this->load->view('detail_hari/detail_hjan', $data);
    }

    ///// FEBRUARI //////
    public function rekapHarianFeb1()
    {
        $data['data'] = $this->H_Feb->get_select1();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb2()
    {
        $data['data'] = $this->H_Feb->get_select2();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb3()
    {
        $data['data'] = $this->H_Feb->get_select3();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb4()
    {
        $data['data'] = $this->H_Feb->get_select4();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb5()
    {
        $data['data'] = $this->H_Feb->get_select5();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb6()
    {
        $data['data'] = $this->H_Feb->get_select6();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb7()
    {
        $data['data'] = $this->H_Feb->get_select7();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb8()
    {
        $data['data'] = $this->H_Feb->get_select8();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb9()
    {
        $data['data'] = $this->H_Feb->get_select9();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb10()
    {
        $data['data'] = $this->H_Feb->get_select10();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb11()
    {
        $data['data'] = $this->H_Feb->get_select11();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb12()
    {
        $data['data'] = $this->H_Feb->get_select12();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb13()
    {
        $data['data'] = $this->H_Feb->get_select13();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb14()
    {
        $data['data'] = $this->H_Feb->get_select14();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb15()
    {
        $data['data'] = $this->H_Feb->get_select15();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb16()
    {
        $data['data'] = $this->H_Feb->get_select16();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb17()
    {
        $data['data'] = $this->H_Feb->get_select17();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb18()
    {
        $data['data'] = $this->H_Feb->get_select18();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb19()
    {
        $data['data'] = $this->H_Feb->get_select19();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb20()
    {
        $data['data'] = $this->H_Feb->get_select20();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb21()
    {
        $data['data'] = $this->H_Feb->get_select21();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb22()
    {
        $data['data'] = $this->H_Feb->get_select22();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb23()
    {
        $data['data'] = $this->H_Feb->get_select23();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb24()
    {
        $data['data'] = $this->H_Feb->get_select24();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb25()
    {
        $data['data'] = $this->H_Feb->get_select25();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb26()
    {
        $data['data'] = $this->H_Feb->get_select26();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb27()
    {
        $data['data'] = $this->H_Feb->get_select27();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }
    public function rekapHarianFeb28()
    {
        $data['data'] = $this->H_Feb->get_select28();
        $this->load->view('detail_hari/detail_hfeb', $data);
    }


    ///// MARET //////
    public function rekapHarianMar1()
    {
        $data['data'] = $this->H_Mar->get_select1();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar2()
    {
        $data['data'] = $this->H_Mar->get_select2();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar3()
    {
        $data['data'] = $this->H_Mar->get_select3();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar4()
    {
        $data['data'] = $this->H_Mar->get_select4();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar5()
    {
        $data['data'] = $this->H_Mar->get_select5();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar6()
    {
        $data['data'] = $this->H_Mar->get_select6();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar7()
    {
        $data['data'] = $this->H_Mar->get_select7();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar8()
    {
        $data['data'] = $this->H_Mar->get_select8();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar9()
    {
        $data['data'] = $this->H_Mar->get_select9();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar10()
    {
        $data['data'] = $this->H_Mar->get_select10();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar11()
    {
        $data['data'] = $this->H_Mar->get_select11();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar12()
    {
        $data['data'] = $this->H_Mar->get_select12();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar13()
    {
        $data['data'] = $this->H_Mar->get_select13();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar14()
    {
        $data['data'] = $this->H_Mar->get_select14();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar15()
    {
        $data['data'] = $this->H_Mar->get_select15();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar16()
    {
        $data['data'] = $this->H_Mar->get_select16();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar17()
    {
        $data['data'] = $this->H_Mar->get_select17();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar18()
    {
        $data['data'] = $this->H_Mar->get_select18();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar19()
    {
        $data['data'] = $this->H_Mar->get_select19();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar20()
    {
        $data['data'] = $this->H_Mar->get_select20();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar21()
    {
        $data['data'] = $this->H_Mar->get_select21();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar22()
    {
        $data['data'] = $this->H_Mar->get_select22();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar23()
    {
        $data['data'] = $this->H_Mar->get_select23();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar24()
    {
        $data['data'] = $this->H_Mar->get_select24();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar25()
    {
        $data['data'] = $this->H_Mar->get_select25();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar26()
    {
        $data['data'] = $this->H_Mar->get_select26();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar27()
    {
        $data['data'] = $this->H_Mar->get_select27();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar28()
    {
        $data['data'] = $this->H_Mar->get_select28();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar29()
    {
        $data['data'] = $this->H_Mar->get_select29();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar30()
    {
        $data['data'] = $this->H_Mar->get_select30();
        $this->load->view('detail_hari/detail_hMar', $data);
    }
    public function rekapHarianMar31()
    {
        $data['data'] = $this->H_Mar->get_select31();
        $this->load->view('detail_hari/detail_hMar', $data);
    }


    ///// APRIL //////
    public function rekapHarianApr1()
    {
        $data['data'] = $this->H_Apr->get_select1();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr2()
    {
        $data['data'] = $this->H_Apr->get_select2();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr3()
    {
        $data['data'] = $this->H_Apr->get_select3();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr4()
    {
        $data['data'] = $this->H_Apr->get_select4();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr5()
    {
        $data['data'] = $this->H_Apr->get_select5();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr6()
    {
        $data['data'] = $this->H_Apr->get_select6();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr7()
    {
        $data['data'] = $this->H_Apr->get_select7();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr8()
    {
        $data['data'] = $this->H_Apr->get_select8();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr9()
    {
        $data['data'] = $this->H_Apr->get_select9();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr10()
    {
        $data['data'] = $this->H_Apr->get_select10();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr11()
    {
        $data['data'] = $this->H_Apr->get_select11();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr12()
    {
        $data['data'] = $this->H_Apr->get_select12();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr13()
    {
        $data['data'] = $this->H_Apr->get_select13();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr14()
    {
        $data['data'] = $this->H_Apr->get_select14();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr15()
    {
        $data['data'] = $this->H_Apr->get_select15();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr16()
    {
        $data['data'] = $this->H_Apr->get_select16();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr17()
    {
        $data['data'] = $this->H_Apr->get_select17();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr18()
    {
        $data['data'] = $this->H_Apr->get_select18();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr19()
    {
        $data['data'] = $this->H_Apr->get_select19();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr20()
    {
        $data['data'] = $this->H_Apr->get_select20();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr21()
    {
        $data['data'] = $this->H_Apr->get_select21();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr22()
    {
        $data['data'] = $this->H_Apr->get_select22();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr23()
    {
        $data['data'] = $this->H_Apr->get_select23();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr24()
    {
        $data['data'] = $this->H_Apr->get_select24();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr25()
    {
        $data['data'] = $this->H_Apr->get_select25();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr26()
    {
        $data['data'] = $this->H_Apr->get_select26();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr27()
    {
        $data['data'] = $this->H_Apr->get_select27();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr28()
    {
        $data['data'] = $this->H_Apr->get_select28();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr29()
    {
        $data['data'] = $this->H_Apr->get_select29();
        $this->load->view('detail_hari/detail_hApr', $data);
    }
    public function rekapHarianApr30()
    {
        $data['data'] = $this->H_Apr->get_select30();
        $this->load->view('detail_hari/detail_hApr', $data);
    }

    ///// MEI //////
    public function rekapHarianMei1()
    {
        $data['data'] = $this->H_Mei->get_select1();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei2()
    {
        $data['data'] = $this->H_Mei->get_select2();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei3()
    {
        $data['data'] = $this->H_Mei->get_select3();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei4()
    {
        $data['data'] = $this->H_Mei->get_select4();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei5()
    {
        $data['data'] = $this->H_Mei->get_select5();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei6()
    {
        $data['data'] = $this->H_Mei->get_select6();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei7()
    {
        $data['data'] = $this->H_Mei->get_select7();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei8()
    {
        $data['data'] = $this->H_Mei->get_select8();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei9()
    {
        $data['data'] = $this->H_Mei->get_select9();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei10()
    {
        $data['data'] = $this->H_Mei->get_select10();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei11()
    {
        $data['data'] = $this->H_Mei->get_select11();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei12()
    {
        $data['data'] = $this->H_Mei->get_select12();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei13()
    {
        $data['data'] = $this->H_Mei->get_select13();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei14()
    {
        $data['data'] = $this->H_Mei->get_select14();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei15()
    {
        $data['data'] = $this->H_Mei->get_select15();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei16()
    {
        $data['data'] = $this->H_Mei->get_select16();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei17()
    {
        $data['data'] = $this->H_Mei->get_select17();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei18()
    {
        $data['data'] = $this->H_Mei->get_select18();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei19()
    {
        $data['data'] = $this->H_Mei->get_select19();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei20()
    {
        $data['data'] = $this->H_Mei->get_select20();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei21()
    {
        $data['data'] = $this->H_Mei->get_select21();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei22()
    {
        $data['data'] = $this->H_Mei->get_select22();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei23()
    {
        $data['data'] = $this->H_Mei->get_select23();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei24()
    {
        $data['data'] = $this->H_Mei->get_select24();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei25()
    {
        $data['data'] = $this->H_Mei->get_select25();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei26()
    {
        $data['data'] = $this->H_Mei->get_select26();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei27()
    {
        $data['data'] = $this->H_Mei->get_select27();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei28()
    {
        $data['data'] = $this->H_Mei->get_select28();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei29()
    {
        $data['data'] = $this->H_Mei->get_select29();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei30()
    {
        $data['data'] = $this->H_Mei->get_select30();
        $this->load->view('detail_hari/detail_hMei', $data);
    }
    public function rekapHarianMei31()
    {
        $data['data'] = $this->H_Mei->get_select31();
        $this->load->view('detail_hari/detail_hMei', $data);
    }


    ///// JUNI  //////
    public function rekapHarianJun1()
    {
        $data['data'] = $this->H_Jun->get_select1();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun2()
    {
        $data['data'] = $this->H_Jun->get_select2();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun3()
    {
        $data['data'] = $this->H_Jun->get_select3();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun4()
    {
        $data['data'] = $this->H_Jun->get_select4();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun5()
    {
        $data['data'] = $this->H_Jun->get_select5();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun6()
    {
        $data['data'] = $this->H_Jun->get_select6();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun7()
    {
        $data['data'] = $this->H_Jun->get_select7();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun8()
    {
        $data['data'] = $this->H_Jun->get_select8();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun9()
    {
        $data['data'] = $this->H_Jun->get_select9();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun10()
    {
        $data['data'] = $this->H_Jun->get_select10();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun11()
    {
        $data['data'] = $this->H_Jun->get_select11();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun12()
    {
        $data['data'] = $this->H_Jun->get_select12();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun13()
    {
        $data['data'] = $this->H_Jun->get_select13();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun14()
    {
        $data['data'] = $this->H_Jun->get_select14();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun15()
    {
        $data['data'] = $this->H_Jun->get_select15();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun16()
    {
        $data['data'] = $this->H_Jun->get_select16();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun17()
    {
        $data['data'] = $this->H_Jun->get_select17();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun18()
    {
        $data['data'] = $this->H_Jun->get_select18();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun19()
    {
        $data['data'] = $this->H_Jun->get_select19();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun20()
    {
        $data['data'] = $this->H_Jun->get_select20();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun21()
    {
        $data['data'] = $this->H_Jun->get_select21();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun22()
    {
        $data['data'] = $this->H_Jun->get_select22();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun23()
    {
        $data['data'] = $this->H_Jun->get_select23();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun24()
    {
        $data['data'] = $this->H_Jun->get_select24();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun25()
    {
        $data['data'] = $this->H_Jun->get_select25();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun26()
    {
        $data['data'] = $this->H_Jun->get_select26();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun27()
    {
        $data['data'] = $this->H_Jun->get_select27();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun28()
    {
        $data['data'] = $this->H_Jun->get_select28();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun29()
    {
        $data['data'] = $this->H_Jun->get_select29();
        $this->load->view('detail_hari/detail_hJun', $data);
    }
    public function rekapHarianJun30()
    {
        $data['data'] = $this->H_Jun->get_select30();
        $this->load->view('detail_hari/detail_hJun', $data);
    }

    ///// JULI //////
    public function rekapHarianJul1()
    {
        $data['data'] = $this->H_Jul->get_select1();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul2()
    {
        $data['data'] = $this->H_Jul->get_select2();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul3()
    {
        $data['data'] = $this->H_Jul->get_select3();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul4()
    {
        $data['data'] = $this->H_Jul->get_select4();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul5()
    {
        $data['data'] = $this->H_Jul->get_select5();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul6()
    {
        $data['data'] = $this->H_Jul->get_select6();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul7()
    {
        $data['data'] = $this->H_Jul->get_select7();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul8()
    {
        $data['data'] = $this->H_Jul->get_select8();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul9()
    {
        $data['data'] = $this->H_Jul->get_select9();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul10()
    {
        $data['data'] = $this->H_Jul->get_select10();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul11()
    {
        $data['data'] = $this->H_Jul->get_select11();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul12()
    {
        $data['data'] = $this->H_Jul->get_select12();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul13()
    {
        $data['data'] = $this->H_Jul->get_select13();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul14()
    {
        $data['data'] = $this->H_Jul->get_select14();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul15()
    {
        $data['data'] = $this->H_Jul->get_select15();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul16()
    {
        $data['data'] = $this->H_Jul->get_select16();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul17()
    {
        $data['data'] = $this->H_Jul->get_select17();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul18()
    {
        $data['data'] = $this->H_Jul->get_select18();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul19()
    {
        $data['data'] = $this->H_Jul->get_select19();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul20()
    {
        $data['data'] = $this->H_Jul->get_select20();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul21()
    {
        $data['data'] = $this->H_Jul->get_select21();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul22()
    {
        $data['data'] = $this->H_Jul->get_select22();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul23()
    {
        $data['data'] = $this->H_Jul->get_select23();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul24()
    {
        $data['data'] = $this->H_Jul->get_select24();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul25()
    {
        $data['data'] = $this->H_Jul->get_select25();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul26()
    {
        $data['data'] = $this->H_Jul->get_select26();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul27()
    {
        $data['data'] = $this->H_Jul->get_select27();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul28()
    {
        $data['data'] = $this->H_Jul->get_select28();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul29()
    {
        $data['data'] = $this->H_Jul->get_select29();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul30()
    {
        $data['data'] = $this->H_Jul->get_select30();
        $this->load->view('detail_hari/detail_hJul', $data);
    }
    public function rekapHarianJul31()
    {
        $data['data'] = $this->H_Jul->get_select31();
        $this->load->view('detail_hari/detail_hJul', $data);
    }


    ///// AGUSTUS  //////
    public function rekapHarianAug1()
    {
        $data['data'] = $this->H_Aug->get_select1();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug2()
    {
        $data['data'] = $this->H_Aug->get_select2();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug3()
    {
        $data['data'] = $this->H_Aug->get_select3();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug4()
    {
        $data['data'] = $this->H_Aug->get_select4();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug5()
    {
        $data['data'] = $this->H_Aug->get_select5();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug6()
    {
        $data['data'] = $this->H_Aug->get_select6();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug7()
    {
        $data['data'] = $this->H_Aug->get_select7();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug8()
    {
        $data['data'] = $this->H_Aug->get_select8();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug9()
    {
        $data['data'] = $this->H_Aug->get_select9();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug10()
    {
        $data['data'] = $this->H_Aug->get_select10();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug11()
    {
        $data['data'] = $this->H_Aug->get_select11();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug12()
    {
        $data['data'] = $this->H_Aug->get_select12();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug13()
    {
        $data['data'] = $this->H_Aug->get_select13();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug14()
    {
        $data['data'] = $this->H_Aug->get_select14();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug15()
    {
        $data['data'] = $this->H_Aug->get_select15();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug16()
    {
        $data['data'] = $this->H_Aug->get_select16();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug17()
    {
        $data['data'] = $this->H_Aug->get_select17();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug18()
    {
        $data['data'] = $this->H_Aug->get_select18();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug19()
    {
        $data['data'] = $this->H_Aug->get_select19();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug20()
    {
        $data['data'] = $this->H_Aug->get_select20();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug21()
    {
        $data['data'] = $this->H_Aug->get_select21();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug22()
    {
        $data['data'] = $this->H_Aug->get_select22();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug23()
    {
        $data['data'] = $this->H_Aug->get_select23();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug24()
    {
        $data['data'] = $this->H_Aug->get_select24();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug25()
    {
        $data['data'] = $this->H_Aug->get_select25();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug26()
    {
        $data['data'] = $this->H_Aug->get_select26();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug27()
    {
        $data['data'] = $this->H_Aug->get_select27();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug28()
    {
        $data['data'] = $this->H_Aug->get_select28();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug29()
    {
        $data['data'] = $this->H_Aug->get_select29();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug30()
    {
        $data['data'] = $this->H_Aug->get_select30();
        $this->load->view('detail_hari/detail_hAug', $data);
    }
    public function rekapHarianAug31()
    {
        $data['data'] = $this->H_Aug->get_select31();
        $this->load->view('detail_hari/detail_hAug', $data);
    }

    ///// SEPTEMBER  //////
    public function rekapHarianSept1()
    {
        $data['data'] = $this->H_Sept->get_select1();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept2()
    {
        $data['data'] = $this->H_Sept->get_select2();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept3()
    {
        $data['data'] = $this->H_Sept->get_select3();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept4()
    {
        $data['data'] = $this->H_Sept->get_select4();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept5()
    {
        $data['data'] = $this->H_Sept->get_select5();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept6()
    {
        $data['data'] = $this->H_Sept->get_select6();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept7()
    {
        $data['data'] = $this->H_Sept->get_select7();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept8()
    {
        $data['data'] = $this->H_Sept->get_select8();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept9()
    {
        $data['data'] = $this->H_Sept->get_select9();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept10()
    {
        $data['data'] = $this->H_Sept->get_select10();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept11()
    {
        $data['data'] = $this->H_Sept->get_select11();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept12()
    {
        $data['data'] = $this->H_Sept->get_select12();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept13()
    {
        $data['data'] = $this->H_Sept->get_select13();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept14()
    {
        $data['data'] = $this->H_Sept->get_select14();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept15()
    {
        $data['data'] = $this->H_Sept->get_select15();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept16()
    {
        $data['data'] = $this->H_Sept->get_select16();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept17()
    {
        $data['data'] = $this->H_Sept->get_select17();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept18()
    {
        $data['data'] = $this->H_Sept->get_select18();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept19()
    {
        $data['data'] = $this->H_Sept->get_select19();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept20()
    {
        $data['data'] = $this->H_Sept->get_select20();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept21()
    {
        $data['data'] = $this->H_Sept->get_select21();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept22()
    {
        $data['data'] = $this->H_Sept->get_select22();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept23()
    {
        $data['data'] = $this->H_Sept->get_select23();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept24()
    {
        $data['data'] = $this->H_Sept->get_select24();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept25()
    {
        $data['data'] = $this->H_Sept->get_select25();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept26()
    {
        $data['data'] = $this->H_Sept->get_select26();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept27()
    {
        $data['data'] = $this->H_Sept->get_select27();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept28()
    {
        $data['data'] = $this->H_Sept->get_select28();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept29()
    {
        $data['data'] = $this->H_Sept->get_select29();
        $this->load->view('detail_hari/detail_hSept', $data);
    }
    public function rekapHarianSept30()
    {
        $data['data'] = $this->H_Sept->get_select30();
        $this->load->view('detail_hari/detail_hSept', $data);
    }

    ///// OKTOBER //////
    public function rekapHarianOct1()
    {
        $data['data'] = $this->H_Oct->get_select1();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct2()
    {
        $data['data'] = $this->H_Oct->get_select2();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct3()
    {
        $data['data'] = $this->H_Oct->get_select3();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct4()
    {
        $data['data'] = $this->H_Oct->get_select4();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct5()
    {
        $data['data'] = $this->H_Oct->get_select5();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct6()
    {
        $data['data'] = $this->H_Oct->get_select6();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct7()
    {
        $data['data'] = $this->H_Oct->get_select7();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct8()
    {
        $data['data'] = $this->H_Oct->get_select8();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct9()
    {
        $data['data'] = $this->H_Oct->get_select9();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct10()
    {
        $data['data'] = $this->H_Oct->get_select10();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct11()
    {
        $data['data'] = $this->H_Oct->get_select11();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct12()
    {
        $data['data'] = $this->H_Oct->get_select12();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct13()
    {
        $data['data'] = $this->H_Oct->get_select13();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct14()
    {
        $data['data'] = $this->H_Oct->get_select14();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct15()
    {
        $data['data'] = $this->H_Oct->get_select15();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct16()
    {
        $data['data'] = $this->H_Oct->get_select16();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct17()
    {
        $data['data'] = $this->H_Oct->get_select17();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct18()
    {
        $data['data'] = $this->H_Oct->get_select18();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct19()
    {
        $data['data'] = $this->H_Oct->get_select19();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct20()
    {
        $data['data'] = $this->H_Oct->get_select20();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct21()
    {
        $data['data'] = $this->H_Oct->get_select21();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct22()
    {
        $data['data'] = $this->H_Oct->get_select22();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct23()
    {
        $data['data'] = $this->H_Oct->get_select23();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct24()
    {
        $data['data'] = $this->H_Oct->get_select24();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct25()
    {
        $data['data'] = $this->H_Oct->get_select25();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct26()
    {
        $data['data'] = $this->H_Oct->get_select26();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct27()
    {
        $data['data'] = $this->H_Oct->get_select27();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct28()
    {
        $data['data'] = $this->H_Oct->get_select28();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct29()
    {
        $data['data'] = $this->H_Oct->get_select29();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct30()
    {
        $data['data'] = $this->H_Oct->get_select30();
        $this->load->view('detail_hari/detail_hOct', $data);
    }
    public function rekapHarianOct31()
    {
        $data['data'] = $this->H_Oct->get_select31();
        $this->load->view('detail_hari/detail_hOct', $data);
    }

    ///// NOVEMBER  //////
    public function rekapHarianNov1()
    {
        $data['data'] = $this->H_Nov->get_select1();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov2()
    {
        $data['data'] = $this->H_Nov->get_select2();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov3()
    {
        $data['data'] = $this->H_Nov->get_select3();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov4()
    {
        $data['data'] = $this->H_Nov->get_select4();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov5()
    {
        $data['data'] = $this->H_Nov->get_select5();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov6()
    {
        $data['data'] = $this->H_Nov->get_select6();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov7()
    {
        $data['data'] = $this->H_Nov->get_select7();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov8()
    {
        $data['data'] = $this->H_Nov->get_select8();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov9()
    {
        $data['data'] = $this->H_Nov->get_select9();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov10()
    {
        $data['data'] = $this->H_Nov->get_select10();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov11()
    {
        $data['data'] = $this->H_Nov->get_select11();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov12()
    {
        $data['data'] = $this->H_Nov->get_select12();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov13()
    {
        $data['data'] = $this->H_Nov->get_select13();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov14()
    {
        $data['data'] = $this->H_Nov->get_select14();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov15()
    {
        $data['data'] = $this->H_Nov->get_select15();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov16()
    {
        $data['data'] = $this->H_Nov->get_select16();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov17()
    {
        $data['data'] = $this->H_Nov->get_select17();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov18()
    {
        $data['data'] = $this->H_Nov->get_select18();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov19()
    {
        $data['data'] = $this->H_Nov->get_select19();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov20()
    {
        $data['data'] = $this->H_Nov->get_select20();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov21()
    {
        $data['data'] = $this->H_Nov->get_select21();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov22()
    {
        $data['data'] = $this->H_Nov->get_select22();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov23()
    {
        $data['data'] = $this->H_Nov->get_select23();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov24()
    {
        $data['data'] = $this->H_Nov->get_select24();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov25()
    {
        $data['data'] = $this->H_Nov->get_select25();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov26()
    {
        $data['data'] = $this->H_Nov->get_select26();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov27()
    {
        $data['data'] = $this->H_Nov->get_select27();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov28()
    {
        $data['data'] = $this->H_Nov->get_select28();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov29()
    {
        $data['data'] = $this->H_Nov->get_select29();
        $this->load->view('detail_hari/detail_hNov', $data);
    }
    public function rekapHarianNov30()
    {
        $data['data'] = $this->H_Nov->get_select30();
        $this->load->view('detail_hari/detail_hNov', $data);
    }

    ///// DESEMBER //////
    public function rekapHarianDes1()
    {
        $data['data'] = $this->H_Des->get_select1();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes2()
    {
        $data['data'] = $this->H_Des->get_select2();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes3()
    {
        $data['data'] = $this->H_Des->get_select3();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes4()
    {
        $data['data'] = $this->H_Des->get_select4();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes5()
    {
        $data['data'] = $this->H_Des->get_select5();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes6()
    {
        $data['data'] = $this->H_Des->get_select6();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes7()
    {
        $data['data'] = $this->H_Des->get_select7();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes8()
    {
        $data['data'] = $this->H_Des->get_select8();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes9()
    {
        $data['data'] = $this->H_Des->get_select9();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes10()
    {
        $data['data'] = $this->H_Des->get_select10();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes11()
    {
        $data['data'] = $this->H_Des->get_select11();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes12()
    {
        $data['data'] = $this->H_Des->get_select12();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes13()
    {
        $data['data'] = $this->H_Des->get_select13();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes14()
    {
        $data['data'] = $this->H_Des->get_select14();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes15()
    {
        $data['data'] = $this->H_Des->get_select15();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes16()
    {
        $data['data'] = $this->H_Des->get_select16();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes17()
    {
        $data['data'] = $this->H_Des->get_select17();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes18()
    {
        $data['data'] = $this->H_Des->get_select18();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes19()
    {
        $data['data'] = $this->H_Des->get_select19();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes20()
    {
        $data['data'] = $this->H_Des->get_select20();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes21()
    {
        $data['data'] = $this->H_Des->get_select21();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes22()
    {
        $data['data'] = $this->H_Des->get_select22();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes23()
    {
        $data['data'] = $this->H_Des->get_select23();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes24()
    {
        $data['data'] = $this->H_Des->get_select24();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes25()
    {
        $data['data'] = $this->H_Des->get_select25();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes26()
    {
        $data['data'] = $this->H_Des->get_select26();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes27()
    {
        $data['data'] = $this->H_Des->get_select27();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes28()
    {
        $data['data'] = $this->H_Des->get_select28();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes29()
    {
        $data['data'] = $this->H_Des->get_select29();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes30()
    {
        $data['data'] = $this->H_Des->get_select30();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
    public function rekapHarianDes31()
    {
        $data['data'] = $this->H_Des->get_select31();
        $this->load->view('detail_hari/detail_hDes', $data);
    }
}
