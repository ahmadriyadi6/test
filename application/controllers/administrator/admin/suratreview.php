<?php

class Suratreview extends CI_Controller{

	public function index()
	{		
		$data['tb_suratreview'] = $this->suratreview_model->tampil_data('tb_suratreview')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratreview',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input()
	{
		$data['tb_suratreview'] = $this->suratreview_model->tampil_data('tb_suratreview')->result();
		$data['tb_suratmasuk'] = $this->suratmasuk_model->tampil_data('tb_suratmasuk')->result();
		$data['kode'] = $this->suratreview_model->buat_kode();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratreview_tambah',$data);
		$this->load->view('templates_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$nomor_surat = $this->input->post('nomor_surat');
			$no_surat = $this->input->post('no_surat');
			$tgl_surat = $this->input->post('tgl_surat');
			$surat = $this->input->post('surat');
			$perihal = $this->input->post('perihal');
			$keterangan = $this->input->post('keterangan');
			$ket = $this->input->post('ket');
			$verif = $this->input->post('verif');
			
        		$data = array(
					'nomor_surat' => $nomor_surat,
					'no_surat' => $no_surat,
        			'tgl_surat' => $tgl_surat,
        			'surat' => $surat,
        			'perihal' => $perihal,
        			'keterangan' => $keterangan,
        			'ket' => $ket,
        			'verif' => $verif,
        		
					
        		);

        		$this->suratreview_model->input_data($data,'tb_suratreview');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data suratreview Berhasil Ditambahkan!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/suratreview');
			}

		}
	public function _rules()
	{
		$this->form_validation->set_rules('nomor_surat','Nomor Surat','required|is_unique[tb_suratreview.nomor_surat]',
		array(
			'required' => '%s Tidak Boleh Kosong!',
			'is_unique' => '%s Sudah ada!*'
		)
		);
		$this->form_validation->set_rules('tgl_surat','Tanggal','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('surat','Nama Pegawai','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('perihal','Tanggal Berangkat','required',['required' => '%s Tidak Boleh Kosong!']);
		$this->form_validation->set_rules('keterangan','keterangan','required',['required' => '%s  Tidak Boleh Kosong!']);
	}

	public function update($id)
	{
		$where = array('id' => $id);

		$data['tb_suratreview'] = $this->suratreview_model->edit_data($where,'tb_suratreview')->result();
		
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebaradmin');
		$this->load->view('administrator/admin/suratreview_update',$data);
		$this->load->view('templates_administrator/footer');

	}
	public function update_aksi()
	{
		$id = $this->input->post('id');
		$nomor_surat = $this->input->post('nomor_surat');
			$no_surat = $this->input->post('no_surat');
			$tgl_surat = $this->input->post('tgl_surat');
			$surat = $this->input->post('surat');
			$perihal = $this->input->post('perihal');
			$keterangan = $this->input->post('keterangan');
			$ket = $this->input->post('ket');
			$verif = $this->input->post('verif');
			
        		$data = array(
					'nomor_surat' => $nomor_surat,
					'no_surat' => $no_surat,
        			'tgl_surat' => $tgl_surat,
        			'surat' => $surat,
        			'perihal' => $perihal,
        			'keterangan' => $keterangan,
        			'ket' => $ket,
        			'verif' => $verif,
        		
					
        		);

			$where = array(
				'id' => $id
			);

        		$this->suratreview_model->update_data($where,$data,'tb_suratreview');
        		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data suratreview Sudah Diubah!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('administrator/admin/suratreview');
		}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->suratreview_model->hapus_data($where,'tb_suratreview');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Data suratreview Telah Dihapus!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
		redirect('administrator/admin/suratreview');
	}
}