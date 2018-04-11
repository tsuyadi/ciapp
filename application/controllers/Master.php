<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_master');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

    public function sekolah(){

        $listSekolah = $this->m_master->getListSekolah();

        $data['listSekolah']= $listSekolah;
        
        $this->load->view('body/sekolah', $data);
    }

    public function siswa(){
        $this->load->view('body/siswa');
    }

    public function guru(){
        $this->load->view('body/guru');
    }

}