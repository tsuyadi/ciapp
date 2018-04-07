<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

	public function index()
	{
		$isLogin = $this->session->userdata('isLogin');

		if($isLogin == FALSE){
			$this->load->view('pages-login');
		}else{
			redirect('home');
		}
		
	}

	public function validateLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$status = $this->m_login->cekLogin($username, $password);

		// $hash = $this->m_login->hashSSHA($password);

		if($status <> false){
			$this->session->set_userdata('isLogin', TRUE);
			$this->session->set_userdata('user', $status);
			redirect('/home', 'refresh');
		}else{
			$data['warning'] = " Login Failed, Wrong username or password!";
			$this->load->view('pages-login', $data); 
		}

		
	}

	public function logout($login)
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform");
		$this->output->set_header("Pragma: no-cache");
		$this->session->sess_destroy();
		redirect("login", $data);
	}
}