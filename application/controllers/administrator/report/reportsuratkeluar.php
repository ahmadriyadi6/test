<?php

class Reportsuratkeluar extends CI_Controller{
	public function index()
	{		
		$data['tb_suratkeluar'] = $this->suratkeluar_model->tampil_data('tb_suratkeluar')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/report/reportsuratkeluar',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function print()
 		{
 			$data['tb_suratkeluar'] = $this->suratkeluar_model->tampil_data('tb_suratkeluar')->result();
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_suratkeluar',$data);

 		}

		 public function print1($id)
 		{
			$data['tb_suratkeluar'] = $this->suratkeluar_model->ambil_id_suratkeluar($id);
 			$this->load->library('mypdf');
 			$this->mypdf->generate('administrator/laporan/print_suratkeluarid',$data);

 		}
}