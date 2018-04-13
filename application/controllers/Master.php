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

    public function getKotaKab(){

        $id = $this->input->post('id');
        $data = $this->m_master->getKotaKab($id);

        echo json_encode($data);

    }

    public function getKecamatan(){

        $id = $this->input->post('id');
        $data = $this->m_master->getKecamatan($id);

        echo json_encode($data);

    }

    public function getKelurahan(){

        $id = $this->input->post('id');
        $data = $this->m_master->getKelurahan($id);

        echo json_encode($data);

    }


    public function siswa(){
        $this->load->view('body/siswa');
    }

    public function guru(){
        $this->load->view('body/guru');
    }

}