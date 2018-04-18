<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_master');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

    public function index(){

        $data['listGuru']= $this->m_master->getListGuru();
        $data['listSekolah']= $this->m_master->getListSekolah();
        $data['listPropinsi']= $this->m_master->getPropinsi();

        $this->load->view('body/guru', $data);
    }

    public function addGuru(){

        $data = array (
            'nik' => $this->input->post('nik'),
            'nip' => $this->input->post('nik'),   
            'nama'  => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan'),
            'tgl_lahir'=> $this->input->post('tgl_lahir'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_tdk_aktif' => $this->input->post('tgl_tdk_aktif'),
            'status' => $this->input->post('status'),
            'kode_sekolah' => $this->input->post('kode_sekolah')
           );

        $return_code = $this->m_master->addGuru($data);

		// $data['warning'] = "Tambah data sekolah sukses";
		echo $return_code;

    }

    public function deleteGuru(){

        $id = $this->input->post('id');

        $return_code = $this->m_master->deleteGuru($id);

		echo $return_code;
    }

}