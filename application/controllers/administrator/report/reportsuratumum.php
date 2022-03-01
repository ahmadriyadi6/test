<?php

class Reportsuratumum extends CI_Controller{

	public function index()
	{		
		$data['tb_suratumum'] = $this->suratumum_model->tampil_data('tb_suratumum')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportsuratumum',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print($id)
 		{
			$data['tb_suratumum'] = $this->suratumum_model->ambil_id_suratumum($id);
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_suratumum',$data);

 		}
}