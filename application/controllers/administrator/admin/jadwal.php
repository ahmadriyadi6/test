<?php

class Jadwal extends CI_Controller{

	public function index()
	{		
		$data['tb_jadwal'] = $this->jadwal_model->tampil_data('tb_jadwal')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/jadwal',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_jadwal'] = $this->jadwal_model->tampil_data('tb_jadwal')->result();
		$data['kode'] = $this->jadwal_model->buat_kode();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/jadwal_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$no_agenda = $this->input->post('no_agenda');
			$tanggal = $this->input->post('tanggal');
			$agenda = $this->input->post('agenda');
			$tahun_sidang = $this->input->post('tahun_sidang');
		
			$rapat = $this->input->post('rapat');
			
			
			
			
			
        		$data = array(
					'no_agenda' => $no_agenda,
        			'tanggal' => $tanggal,
					'agenda' => $agenda,
        			'tahun_sidang' => $tahun_sidang,
        			'rapat' => $rapat,        		
        			
        		);

        		$this->jadwal_model->input_data($data,'tb_jadwal');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data jadwal Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/jadwal');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('no_agenda','no_agenda','required[tb_jadwal.no_agenda]',
		array(
			'required' => '%s Tidak Boleh Kosong!',
		
		)
		);		
		$this->form_validation->set_rules('agenda','agenda','required',['required' => '%s Tidak Boleh Kosong!']);
		
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_jadwal'] = $this->jadwal_model->edit_data($where,'tb_jadwal')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/jadwal_update',$data);
		$this->load->view('templates_administrator/footer');

	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$no_agenda = $this->input->post('no_agenda');
			$tanggal = $this->input->post('tanggal');
			$agenda = $this->input->post('agenda');
			$tahun_sidang = $this->input->post('tahun_sidang');
		
			$rapat = $this->input->post('rapat');
			
			
			
			
			
        		$data = array(
					'no_agenda' => $no_agenda,
        			'tanggal' => $tanggal,
					'agenda' => $agenda,
        			'tahun_sidang' => $tahun_sidang,
        			'rapat' => $rapat,
				);

			$where = array(
				'id' => $id
			);

        		$this->jadwal_model->update_data($where,$data,'tb_jadwal');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data jadwal Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/jadwal');
		}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->jadwal_model->hapus_data($where,'tb_jadwal');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data jadwal Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/jadwal');
	}
}