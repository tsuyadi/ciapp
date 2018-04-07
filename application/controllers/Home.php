<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $isLogin = $this->session->userdata('isLogin');

		if($isLogin == FALSE){
			$data['warning'] =" Login session timeout!";
			$this->load->view('pages-login', $data);
		}else{

            $user = $this->session->userdata('user');
            $data['user'] = $user;
			$this->send('home', $data);
		}
    }
    
    public function send($view, $datasend){
        $this->load->view('/header/header', $datasend);
        $this->load->view('/sidebar/sidebar', $datasend);
        $this->load->view('/body/'.$view, $datasend);
        $this->load->view('/footer/footer', $datasend);
    }
}