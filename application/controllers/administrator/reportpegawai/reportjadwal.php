<?php

class Reportjadwal extends CI_Controller{

	public function index()
	{		
		$data['tb_jadwal'] = $this->jadwal_model->tampil_data('tb_jadwal')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebarpegawai');
		$this->load->view('administrator/admin/report/reportjadwal',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
			$data['tb_jadwal'] = $this->suratmasuk_model->tampil_data('tb_jadwal')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_jadwal',$data);

 		}
}