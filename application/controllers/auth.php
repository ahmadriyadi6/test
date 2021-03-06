<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_administrator/header');
		$this->load->view('welcome_message');
	}

	public function proses_login()
	{
			$this->form_validation->set_rules('username','username','required',['required' => 'Username Harus Diisi!']);
			$this->form_validation->set_rules('password','password','required',['required' => 'Password Harus Diisi!']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_administrator/header');
			$this->load->view('welcome_message');
			$this->load->view('templates_administrator/footer');
		}else {
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');


			$user = $username;
			$pass = MD5($password);

			$cek	= $this->login_model->cek_login($user, $pass);

			if ($cek->num_rows() > 0 ){

				foreach ($cek->result() as $ck) {
					$sess_data['username'] = $ck->username;
					$sess_data['email'] = $ck->email;
					$sess_data['level'] = $ck->level;
					$this->session->set_userdata($sess_data);
				}				
				if($sess_data['level'] == 'admin'){
					redirect('administrator/admin/dashboardadmin');
				}else if ($sess_data['level'] == 'pegawai') {
					redirect('administrator/pegawai/dashboardpegawai');
				}
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Maaf Username atau Password Anda Salah !
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth');

			}else {
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			 Username atau Password Anda Salah !
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
				redirect('auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
