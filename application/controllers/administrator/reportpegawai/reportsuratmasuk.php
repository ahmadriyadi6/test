<?php

class Reportsuratmasuk extends CI_Controller{

	public function index()
	{		
		$data['tb_suratmasuk'] = $this->suratmasuk_model->tampil_data('tb_suratmasuk')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebarpegawai');
		$this->load->view('administrator/admin/report/reportsuratmasuk',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_suratmasuk'] = $this->suratmasuk_model->tampil_data('tb_suratmasuk')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_suratmasuk',$data);

 		}
}