<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public function index(){
        $this->load->view('body/sekolah');
    }

    public function sekolah(){
        $this->load->view('body/sekolah');
    }

    public function siswa(){
        $this->load->view('body/siswa');
    }

    public function guru(){
        $this->load->view('body/guru');
    }

}