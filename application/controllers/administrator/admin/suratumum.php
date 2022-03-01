<?php

class Suratumum extends CI_Controller{

	public function index()
	{		
		$data['tb_suratumum'] = $this->suratumum_model->tampil_data('tb_suratumum')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratumum',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_suratumum'] = $this->suratumum_model->tampil_data('tb_suratumum')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratumum_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$sdr = $this->input->post('sdr');
			$tanggal = $this->input->post('tanggal');
			$isi = $this->input->post('isi');
			$tanggapan = $this->input->post('tanggapan');
			$sifat = $this->input->post('sifat');
			$ket = $this->input->post('ket');
			$verif = $this->input->post('verif');
			
        		$data = array(
					'sdr' => $sdr,
        			'tanggal' => $tanggal,
        			'isi' => $isi,
        			'tanggapan' => $tanggapan,
        			'sifat' => $sifat,
        			'ket' => $ket,
        			'verif' => $verif,
        				
        		);

        		$this->suratumum_model->input_data($data,'tb_suratumum');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Hasil Paripurna Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/suratumum');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('sdr','sdr','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tanggal','tanggal','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('isi','isi','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tanggapan','Tanggapan','required',['required' => '%s  Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('sifat','sifat','required',['required' => '%s  Tidak Boleh Kosong!']);
	
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_suratumum'] = $this->suratumum_model->edit_data($where,'tb_suratumum')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratumum_update',$data);
		$this->load->view('templates_administrator/footer');

	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$sdr = $this->input->post('sdr');
		$tanggal = $this->input->post('tanggal');
		$isi = $this->input->post('isi');
		$tanggapan = $this->input->post('tanggapan');
		$sifat = $this->input->post('sifat');
		$ket = $this->input->post('ket');
		$verif = $this->input->post('verif');
		
			$data = array(
				'sdr' => $sdr,
				'tanggal' => $tanggal,
				'isi' => $isi,
				'tanggapan' => $tanggapan,
				'sifat' => $sifat,
				'ket' => $ket,
				'verif' => $verif,
					
			);


			$where = array(
				'id' => $id
			);

        		$this->suratumum_model->update_data($where,$data,'tb_suratumum');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Hasil Paripurna Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/suratumum');
		}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->suratumum_model->hapus_data($where,'tb_suratumum');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data Hasil Paripurna Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/suratumum');
	}
}