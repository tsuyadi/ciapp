<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_master');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

    public function index(){

        $listSekolah = $this->m_master->getListSekolah();
        $listJenisSekolah = $this->m_master->getJenisSekolah();
        $listPropinsi = $this->m_master->getPropinsi();

        $data['listSekolah']= $listSekolah;
        $data['listJenisSekolah']= $listJenisSekolah;
        $data['listPropinsi']= $listPropinsi;


        $this->load->view('body/sekolah', $data);
    }

    
	public function addSekolah(){

        $data = array (
            'kode_sekolah' => $this->input->post('kode_sekolah'),  
            'nama_sekolah'  => $this->input->post('nama_sekolah'),
            'jenis_sekolah' => $this->input->post('jenis_sekolah'),
            'akreditasi'=> $this->input->post('akreditasi'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'propinsi' => $this->input->post('propinsi'),
            'kabupaten' => $this->input->post('kabupaten'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kode_pos' => $this->input->post('kode_pos')
           );

        $return_code = $this->m_master->addSekolah($data);

		// $data['warning'] = "Tambah data sekolah sukses";
		echo $return_code;

    }

    public function deleteSekolah(){

        $id = $this->input->post('id');

        $return_code = $this->m_master->deleteSekolah($id);

		echo $return_code;
    }

}