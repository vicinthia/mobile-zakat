<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class InputZakat extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Zakat_model', 'bayar');
    }
    public function index_get()
    {
        $data['judul'] = 'Daftar bayar';
        $id = $this->get('id');

        if ($id === null) {
            $masterku = $this->bayar->getAllBayar();
        } else {
            $masterku = $this->bayar->getAllBayar($id);
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
        $this->load->view('home', $masterku);
    }


    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'provide an id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->bayar->deleteBayar($id) > 0) {
                // ok
                $this->response([
                    'status' => TRUE,
                    'id' => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id not found
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id' => $this->post('id'),
            'nama' => $this->post('nama'),
            'no_hp' => $this->post('no_hp'),
            'alamat' => $this->post('alamat'),
            'jenis_zakat' => $this->post('jenis_zakat'),
            'jumlah_jiwa' => $this->post('jumlah_jiwa'),
            'penerima' => $this->post('penerima'),
            'tgl' => $this->post('tgl'),
            'pembayar1' => $this->post('pembayar1'),
            'pembayar2' => $this->post('pembayar2'),
            'pembayar3' => $this->post('pembayar3'),
            'pembayar4' => $this->post('pembayar4'),
            'pembayar5' => $this->post('pembayar5'),
            'pembayar6' => $this->post('pembayar6'),
            'pembayar7' => $this->post('pembayar7'),
            'beras' => $this->post('beras'),
            'uang' => $this->post('uang'),
            'mal' => $this->post('mal'),
            'fidyah' => $this->post('fidyah'),
            'infaq' => $this->post('infaq'),
        ];

        if ($this->bayar->createBayar($data) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'new bayar has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to created new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');

        $data = [
            'id' => $this->put('id'),
            'nama' => $this->put('nama'),
            'no_hp' => $this->put('no_hp'),
            'alamat' => $this->put('alamat'),
            'jenis_zakat' => $this->put('jenis_zakat'),
            'jumlah_jiwa' => $this->put('jumlah_jiwa'),
            'penerima' => $this->put('penerima'),
            'tgl' => $this->put('tgl'),
            'pembayar1' => $this->put('pembayar1'),
            'pembayar2' => $this->put('pembayar2'),
            'pembayar3' => $this->put('pembayar3'),
            'pembayar4' => $this->put('pembayar4'),
            'pembayar5' => $this->put('pembayar5'),
            'pembayar6' => $this->put('pembayar6'),
            'pembayar7' => $this->put('pembayar7'),
            'beras' => $this->put('beras'),
            'uang' => $this->put('uang'),
            'mal' => $this->put('mal'),
            'fidyah' => $this->put('fidyah'),
            'infaq' => $this->put('infaq'),
        ];

        if ($this->bayar->updateBayar($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'data bayar has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
