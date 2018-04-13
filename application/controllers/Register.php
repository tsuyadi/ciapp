<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

	public function index()
	{
		$this->load->view('pages-register');
	}

	public function registerUser(){
		$username = $this->input->post('username');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->m_login->registerUser($username, $name, $email, $password);

		$data['warning'] = "Registration success";
		$this->load->view('pages-login', $data); 

	}
}