<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_master');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

    public function index(){

        $listSekolah = $this->m_master->getListSekolah();
        $listSiswa = $this->m_master->getListSiswa();
        $listPropinsi = $this->m_master->getPropinsi();

        $data['listSekolah']= $listSekolah;
        $data['listSiswa']= $listSiswa;
        $data['listPropinsi']= $listPropinsi;

        $this->load->view('body/siswa', $data);
    }

    public function formSiswa(){

        $listSekolah = $this->m_master->getListSekolah();
        // $listSiswa = $this->m_master->getListSiswa();
        $listPropinsi = $this->m_master->getPropinsi();

        $data['listSekolah']= $listSekolah;
        $data['siswa']= "";
        $data['listPropinsi']= $listPropinsi;

        $this->load->view('body/form_siswa', $data);
    }

    
	public function addSiswa(){

        $no_induk = $this->input->post('no_induk');
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $no_induk;
        // $config['max_size']     = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if($this->upload->do_upload("file")){

            $data = array (
                'nik' => $this->input->post('nik'),  
                'no_induk'  => $no_induk,
                'nama' => $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nama_bapak' => $this->input->post('nama_bapak'),
                'telp' => $this->input->post('telp'),
                'telp_ortu' => $this->input->post('telp_ortu'),
                'kelas' => $this->input->post('kelas'),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'catatan' => $this->input->post('catatan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'negara' => $this->input->post('negara')
            );

            $return_code = $this->m_master->addSiswa($data);
		    echo $return_code;
        }else{
            echo $this->upload->display_errors('<p>', '</p>');
        }
    }


    public function formUpdateSiswa(){

        $id = $this->input->get('id');
        $siswa = $this->m_master->searchSiswa($id);

        $listSekolah = $this->m_master->getListSekolah();
        // $listSiswa = $this->m_master->getListSiswa();
        $listPropinsi = $this->m_master->getPropinsi();

        $data['listSekolah']= $listSekolah;
        $data['siswa']= json_encode($siswa);
        $data['listPropinsi']= $listPropinsi;

        // print_r($data);

        $this->load->view('body/form_siswa', $data);
    }


    public function updateSiswa(){

        $no_induk = $this->input->post('no_induk');
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $no_induk;
        // $config['max_size']     = '100';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '768';
        $this->load->library('upload', $config);

        if($this->upload->do_upload("file")){

            $data = array (
                'Id' => $this->input->post('Id'), 
                'nik' => $this->input->post('nik'),  
                'no_induk'  => $no_induk,
                'nama' => $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kode_sekolah' => $this->input->post('kode_sekolah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'nama_bapak' => $this->input->post('nama_bapak'),
                'telp' => $this->input->post('telp'),
                'telp_ortu' => $this->input->post('telp_ortu'),
                'kelas' => $this->input->post('kelas'),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'catatan' => $this->input->post('catatan'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'negara' => $this->input->post('negara')
            );

            $return_code = $this->m_master->updateSiswa($data);
		    echo $return_code;
        }else{
            echo $this->upload->display_errors('<p>', '</p>');
        }
    }



    public function searchSiswa(){

        $id = $this->input->post('id');

        $siswa = $this->m_master->searchSiswa($id);

		echo json_encode($siswa);
    }

    public function deleteSiswa(){

        $id = $this->input->post('id');

        $return_code = $this->m_master->deleteSiswa($id);

		echo $return_code;
    }

}