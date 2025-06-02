<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rekapzakat');
		$this->load->model('m_zakat');
		$this->load->model('sum_bukti');
		
		// $this->load->model('sum_bukti');
		if($this->session->userdata('is_active') != "login"){
            redirect('panel');
        }
		
	}

	public function index()
	{
		$data['judul'] = 'Data Pembayaran';
		// $data['getzakat'] = $this->db->get('input_zakat')->result_array();
		$data['getzakat'] = $this->db->query("SELECT * FROM input_zakat ORDER BY tgl DESC")->result_array();
		$data['sum_totalAllAprMei'] = $this->m_rekapzakat->get_sumAprMei();
		$data['sum_totalAllAprMeiBeras'] = $this->m_rekapzakat->get_sumAprMeiberas();
		$data['sum_totalAllAprMeiMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
		$data['sum_totalAllAprMeiFidyah'] = $this->m_rekapzakat->get_sumAprMeiFidyah();
		$data['sum_totalAllAprMeiInfaq'] = $this->m_rekapzakat->get_sumAprMeiInfaq();
		// $data['gettotal'] = $this->sum_bukti->get_total();
		$this->load->view('home/header', $data);
		$this->load->view('pembayaran/index', $data);
		$this->load->view('home/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Pembayaran';
		// $data['id'] = $this->m_zakat->generate_id();
		$this->load->view('home/header', $data);
		$this->load->view('Pembayaran/tambah', $data);
		$this->load->view('home/footer');
	}
	public function export()
	{
		// $data['getzakat'] = $this->db->get('input_zakat')->result_array();
		$this->load->view('zakat/cetakrekap/excel');
		// header("Content-Type: application/xls");
		// header("Content-Disposition: attachment; filename:doewnload.xls");
		
		// $spreadsheet = new Spreadsheet();
		// $activeWorksheet = $spreadsheet->getActiveSheet();
		// $activeWorksheet->setCellValue('A1', 'Hello World !');

		// $writer = new Xlsx($spreadsheet);
		// $writer->save('hello world.xlsx');


	}

	public function export_excel()
	{
		// $data['getzakat'] = $this->db->get('input_zakat')->result_array();
		$data['getzakat'] = $this->db->query("SELECT * FROM input_zakat ORDER BY tgl DESC")->result_array();
		$data['sum_totalAllAprMei'] = $this->m_rekapzakat->get_sumAprMei();
		$data['sum_totalAllAprMeiBeras'] = $this->m_rekapzakat->get_sumAprMeiberas();
		$data['sum_totalAllAprMeiMal'] = $this->m_rekapzakat->get_sumAprMeiMal();
		$data['sum_totalAllAprMeiFidyah'] = $this->m_rekapzakat->get_sumAprMeiFidyah();
		$data['sum_totalAllAprMeiInfaq'] = $this->m_rekapzakat->get_sumAprMeiInfaq();
		$this->load->view('zakat/cetakrekap/export', $data);
	}

	public function aksi_tambah()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'jenis_zakat' => $this->input->post('jenis_zakat'),
			'jumlah_jiwa' => $this->input->post('jumlah_jiwa'),
			'pembayar1' => $this->input->post('pembayar1'),
			'pembayar2' => $this->input->post('pembayar2'),
			'pembayar3' => $this->input->post('pembayar3'),
			'pembayar4' => $this->input->post('pembayar4'),
			'pembayar5' => $this->input->post('pembayar5'),
			'pembayar6' => $this->input->post('pembayar6'),
			'pembayar7' => $this->input->post('pembayar7'),
			'beras' => $this->input->post('beras'),
			'uang' => $this->input->post('uang'),
			'mal' => $this->input->post('mal'),
			'fidyah' => $this->input->post('fidyah'),
			'infaq' => $this->input->post('infaq'),
			'penerima' => $this->input->post('penerima'),
			'tgl' => $this->input->post('tgl'),
		);
		$query = $this->db->insert('input_zakat', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Pembayaran Zakat Berhasil di Simpan!');
			redirect('pembayaran');
		}
		return $query;
	}

	public function form_edit($id)
	{
		$data['judul'] = 'Detail Pembayaran';
		$data['editdata'] = $this->m_zakat->edit($id);
		$this->load->view('home/header', $data);
		$this->load->view('Pembayaran/form_edit', $data);
		$this->load->view('home/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$data = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'status' => $this->input->post('status'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'jenis_zakat' => $this->input->post('jenis_zakat'),
			'jumlah_jiwa' => $this->input->post('jumlah_jiwa'),
			'pembayar1' => $this->input->post('pembayar1'),
			'pembayar2' => $this->input->post('pembayar2'),
			'pembayar3' => $this->input->post('pembayar3'),
			'pembayar4' => $this->input->post('pembayar4'),
			'pembayar5' => $this->input->post('pembayar5'),
			'pembayar6' => $this->input->post('pembayar6'),
			'pembayar7' => $this->input->post('pembayar7'),
			'beras' => $this->input->post('beras'),
			'uang' => $this->input->post('uang'),
			'mal' => $this->input->post('mal'),
			'fidyah' => $this->input->post('fidyah'),
			'infaq' => $this->input->post('infaq'),
			'penerima' => $this->input->post('penerima'),
			'tgl' => $this->input->post('tgl'),
		);
		$query = $this->m_zakat->update($id, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Pembayaran Zakat Berhasil di Update!');
			redirect('pembayaran');
		}
		return $query;
	}

	public function delete($id)
	{
		$query = $this->m_zakat->delete($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Pembayaran Zakat Berhasil di Hapus!');
			redirect('pembayaran');
		}
		return $query;
	}

	public function form_status($id)
	{
		$data['judul'] = 'Form Status';
		$data['ubahdata'] = $this->m_zakat->status($id);
		$this->load->view('home/header', $data);
		$this->load->view('Pembayaran/form_status', $data);
		$this->load->view('home/footer');
	}

	public function update_status()
	{
		$id = $this->input->post('id');
		$data = array(
			'id' => $this->input->post('id'),
			'status' => $this->input->post('status'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'jenis_zakat' => $this->input->post('jenis_zakat'),
			'jumlah_jiwa' => $this->input->post('jumlah_jiwa'),
			'pembayar1' => $this->input->post('pembayar1'),
			'pembayar2' => $this->input->post('pembayar2'),
			'pembayar3' => $this->input->post('pembayar3'),
			'pembayar4' => $this->input->post('pembayar4'),
			'pembayar5' => $this->input->post('pembayar5'),
			'pembayar6' => $this->input->post('pembayar6'),
			'pembayar7' => $this->input->post('pembayar7'),
			'beras' => $this->input->post('beras'),
			'uang' => $this->input->post('uang'),
			'mal' => $this->input->post('mal'),
			'penerima' => $this->input->post('penerima'),
			'tgl' => $this->input->post('tgl'),
		);
		$query = $this->m_zakat->aksi_status($id, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Pembayaran Zakat Berhasil di Update!');
			redirect('pembayaran');
		}
		return $query;
	}

	public function cetak()
	{

		// $this->load->view('home/header');
		$this->load->view('Pembayaran/cetak');
		// $this->load->view('home/footer');
	}
}
