<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class rekapJul extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Eticket', 'ticket');
    }
    public function index_get()
    {
        $id = $this->get('id_transaksi');

        if ($id === null) {
            $masterku = $this->ticket->getJul();
        } else {
            $masterku = $this->ticket->getJul($id);
        }

        if ($masterku) {
            $this->response([
                'status' => TRUE,
                'data' => $masterku
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

        $this->load->view('detail_bulan/detail_jul', $masterku);
    }
}
