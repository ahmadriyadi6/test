<?php

class Reportpetugas extends CI_Controller{

	public function index()
	{		
		$data['tb_petugas'] = $this->petugas_model->tampil_data('tb_petugas')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportpetugas',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
			$data['tb_petugas'] = $this->suratmasuk_model->tampil_data('tb_petugas')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_petugas',$data);

 		}
}