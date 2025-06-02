<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Harga extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Harga_model', 'harga');
    }
    public function index_get()
    {
        $data['judul'] = 'Daftar Harga';
        $id = $this->get('id');

        if ($id === null) {
            $masterku = $this->harga->getAllHarga();
        } else {
            $masterku = $this->harga->getAllHarga($id);
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
            if ($this->harga->deleteHarga($id) > 0) {
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

        if ($this->harga->createHarga($data) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'new Harga has been created'
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

        if ($this->harga->updateHarga($data, $id) > 0) {
            $this->response([
                'status' => TRUE,
                'message' => 'data Harga has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
