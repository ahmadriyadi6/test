<?php

class Reportsuratreview extends CI_Controller{

	public function index()
	{		
		$data['tb_suratreview'] = $this->suratreview_model->tampil_data('tb_suratreview')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebarpegawai');
		$this->load->view('administrator/admin/report/reportsuratreview',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
			$data['tb_suratreview'] = $this->suratreview_model->tampil_data('tb_suratreview')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_suratreview',$data);

 		}
}