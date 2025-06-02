<?php
defined('BASEPATH') or exit('No direct script access allowed');


class m_HariApr extends CI_Model
{
    // UANG //
    public function get_sumApr1()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr2()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-02' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr3()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-03' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr4()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-04' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr5()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-05' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr6()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-06' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr7()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-07' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr8()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-08' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr9()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-09' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr10()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-10' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr11()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-11' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr12()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-12' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr13()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-13' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr14()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-14' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr15()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-15' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr16()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-16' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr17()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-17' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr18()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-18' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr19()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-19' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr20()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-20' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr21()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-21' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr22()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-22' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr23()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-23' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr24()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-24' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr25()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-25' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr26()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-26' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr27()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-27' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr28()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-28' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr29()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-29' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumApr30()
    {
        $this->db->select_sum('uang');
        $this->db->from("input_zakat where date (tgl) = '2023-04-30' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }

    ///////////////////// BERAS //////////////////////////////
    public function get_sumAprBeras1()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras2()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-02' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras3()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-03' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras4()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-04' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras5()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-05' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras6()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-06' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras7()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-07' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras8()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-08' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras9()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-09' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras10()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-10' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras11()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-11' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras12()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-12' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras13()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-13' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras14()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-14' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras15()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-15' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras16()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-16' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras17()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-17' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras18()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-18' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras19()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-19' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras20()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-20' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras21()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-21' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras22()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-22' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras23()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-23' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras24()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-24' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras25()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-25' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras26()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-26' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras27()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-27' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras28()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-28' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras29()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-29' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprBeras30()
    {
        $this->db->select_sum('beras');
        $this->db->from("input_zakat where date (tgl) = '2023-04-30' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }

    ///////////////////// MAL //////////////////////////////
    public function get_sumAprMal1()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-01' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal2()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-02' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal3()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-03' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal4()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-04' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal5()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-05' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal6()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-06' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal7()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-07' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal8()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-08' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal9()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-09' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal10()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-10' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal11()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-11' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal12()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-12' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal13()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-13' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal14()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-14' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal15()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-15' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal16()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-16' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal17()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-17' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal18()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-18' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal19()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-19' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal20()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-20' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal21()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-21' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal22()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-22' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal23()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-23' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal24()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-24' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal25()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-25' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal26()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-26' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal27()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-27' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal28()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-28' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal29()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-29' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }
    public function get_sumAprMal30()
    {
        $this->db->select_sum('mal');
        $this->db->from("input_zakat where date (tgl) = '2023-04-30' && status = 'Telah Validasi'");
        return $this->db->get('')->row();
    }


     ///////////////////// FIDYAH //////////////////////////////
     public function get_sumAprFidyah1()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-01' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah2()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-02' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah3()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-03' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah4()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-04' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah5()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-05' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah6()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-06' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah7()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-07' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah8()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-08' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah9()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-09' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah10()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-10' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah11()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-11' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah12()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-12' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah13()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-13' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah14()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-14' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah15()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-15' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah16()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-16' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah17()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-17' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah18()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-18' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah19()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-19' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah20()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-20' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah21()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-21' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah22()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-22' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah23()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-23' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah24()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-24' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah25()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-25' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah26()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-26' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah27()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-27' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah28()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-28' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah29()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-29' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprFidyah30()
     {
         $this->db->select_sum('fidyah');
         $this->db->from("input_zakat where date (tgl) = '2023-04-30' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }

     ///////////////////// INFAQ //////////////////////////////
     public function get_sumAprInfaq1()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-01' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq2()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-02' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq3()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-03' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq4()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-04' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq5()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-05' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq6()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-06' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq7()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-07' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq8()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-08' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq9()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-09' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq10()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-10' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq11()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-11' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq12()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-12' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq13()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-13' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq14()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-14' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq15()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-15' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq16()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-16' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq17()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-17' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq18()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-18' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq19()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-19' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq20()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-20' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq21()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-21' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq22()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-22' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq23()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-23' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq24()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-24' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq25()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-25' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq26()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-26' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq27()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-27' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq28()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-28' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq29()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-29' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
     public function get_sumAprInfaq30()
     {
         $this->db->select_sum('infaq');
         $this->db->from("input_zakat where date (tgl) = '2023-04-30' && status = 'Telah Validasi'");
         return $this->db->get('')->row();
     }
}
