<?php

class Suratkeluar extends CI_Controller{

	public function index()
	{		
		$data['tb_suratkeluar'] = $this->suratkeluar_model->tampil_data('tb_suratkeluar')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebarpegawai');
		$this->load->view('administrator/pegawai/suratkeluar',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_suratkeluar'] = $this->suratkeluar_model->tampil_data('tb_suratkeluar')->result();
		$data['tb_petugas'] = $this->petugas_model->tampil_data('tb_petugas')->result();
		$data['kode'] = $this->suratkeluar_model->buat_kode();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebarpegawai');
		$this->load->view('administrator/pegawai/suratkeluar_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$tanggal = $this->input->post('tanggal');
			$nm_petugas = $this->input->post('nm_petugas');
			$pengirim = $this->input->post('pengirim');
			$alamat = $this->input->post('alamat');
			$surat = $this->input->post('surat');
			$no_surat = $this->input->post('no_surat');
			$tgl_surat = $this->input->post('tgl_surat');
			$tgl_dikeluarkan = $this->input->post('tgl_dikeluarkan');
			$perihal = $this->input->post('perihal');
			$file = $_FILES['file'];
			if($file=''){}else{
				$config['upload_path'] ='./assets/img';
				$config['allowed_types'] ='jpg|png|gif|pdf';
				$config['max_size']      = 2048;
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('file')) {
					echo "Gagal Upload"; die;
				}else{
					$file=$this->upload->data('file_name');
				}
			}
			
			
        		$data = array(
					'tanggal' => $tanggal,
					'nm_petugas' => $nm_petugas,
					'pengirim' => $pengirim,
					'alamat' => $alamat,
        			'surat' => $surat,
        			'no_surat' => $no_surat,
        			'tgl_surat' => $tgl_surat,
        			'tgl_dikeluarkan' => $tgl_dikeluarkan,
        			'perihal' => $perihal,
					'file' => $file
					
        		);

        		$this->suratkeluar_model->input_data($data,'tb_suratkeluar');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data suratkeluar Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/pegawai/suratkeluar');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('tanggal','Tanggal','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('surat','Surat','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('no_surat','No Surat','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_surat','Tanggal Surat keluar','required',['required' => '%s  Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('tgl_dikeluarkan','Tanggal Surat Dikeluarkan','required',['required' => '%s  Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('perihal','Perihal','required',['required' => '%s  Tidak Boleh Kosong!']);
	
	}


}