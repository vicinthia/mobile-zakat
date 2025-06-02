<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Bayar extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bayar_model', 'bayar');
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
            'weekdays' => $this->post('weekdays'),
            'weekend' => $this->post('weekend'),
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
            'weekdays' => $this->put('weekdays'),
            'weekend' => $this->put('weekend')
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
