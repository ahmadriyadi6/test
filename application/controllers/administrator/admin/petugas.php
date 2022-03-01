<?php

class Petugas extends CI_Controller{

	public function index()
	{		
		$data['tb_petugas'] = $this->petugas_model->tampil_data('tb_petugas')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/petugas',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_petugas'] = $this->petugas_model->tampil_data('tb_petugas')->result();
		// $data['kode'] = $this->petugas_model->buat_kode();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/petugas_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$kd_petugas = $this->input->post('kd_petugas');
			$nm_petugas = $this->input->post('nm_petugas');
			$nama = $this->input->post('nama');
			
			$alamat = $this->input->post('alamat');
		
			$no_hp = $this->input->post('no_hp');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			
			
			
			
        		$data = array(
					'kd_petugas' => $kd_petugas,
        			'nm_petugas' => $nm_petugas,
        			'nama' => $nama,
				
        			'alamat' => $alamat,
        			'no_hp' => $no_hp,        		
        			'tanggal' => $tanggal,        		
        			'jam' => $jam,        		
					
        		);

        		$this->petugas_model->input_data($data,'tb_petugas');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data petugas Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/petugas');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('kd_petugas','kd_petugas','required[tb_petugas.kd_petugas]',
		array(
			'required' => '%s Tidak Boleh Kosong!',
		
		)
		);		
		$this->form_validation->set_rules('nm_petugas','Nama petugas','required',['required' => '%s Tidak Boleh Kosong!']);
		
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_petugas'] = $this->petugas_model->edit_data($where,'tb_petugas')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/petugas_update',$data);
		$this->load->view('templates_administrator/footer');

	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$kd_petugas = $this->input->post('kd_petugas');
			$nm_petugas = $this->input->post('nm_petugas');
			$nama = $this->input->post('nama');
			
			$alamat = $this->input->post('alamat');
		
			$no_hp = $this->input->post('no_hp');
			$tanggal = $this->input->post('tanggal');
			$jam = $this->input->post('jam');
			
			
			
			
        		$data = array(
					'kd_petugas' => $kd_petugas,
        			'nm_petugas' => $nm_petugas,
        			'nama' => $nama,
				
        			'alamat' => $alamat,
        			'no_hp' => $no_hp,        		
        			'tanggal' => $tanggal,        		
        			'jam' => $jam,        		
					
        		);

			$where = array(
				'id' => $id
			);

        		$this->petugas_model->update_data($where,$data,'tb_petugas');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data petugas Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/petugas');
		}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->petugas_model->hapus_data($where,'tb_petugas');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data petugas Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/petugas');
	}
}