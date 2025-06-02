<?php 

class Report extends CI_Controller {
	public function pembayar()
	{
		$data['judul'] = 'Data Laporan Pembayar';
		// $data['pnr'] = $this->model('Pembayar_model')->getAllPembayar();
		$this->load->view('report/Pembayar', $data);
	}
}