<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
	{
		parent::__construct();		
		$this->load->model('m_home');		
		$this->load->database();		
		$this->load->helper('url');
		
	}

	public function index()
	{
        $isLogin = $this->session->userdata('isLogin');

		if($isLogin == FALSE){
			$data['warning'] =" Login session timeout!";
			$this->load->view('pages-login', $data);
		}else{

            $user = $this->session->userdata('user');
            $menu = $this->drawSidebar($user->user_level);

            $session_user = array('menu' => $menu,
                'user' => $user

            );

            // var_dump($menu);


            // $data['user'] = $user;
            // $data['menu'] = $menu;

            $data = array('session_user' => $session_user);
			$this->send('home', $data);
		}
    }
    
    public function send($view, $datasend){
        $this->load->view('/header/header', $datasend);
        $this->load->view('/sidebar/sidebar', $datasend);
        $this->load->view('/body/'.$view, $datasend);
        $this->load->view('/footer/footer', $datasend);
    }

    public function drawSidebar($level){

        $listMenus="";
        $menuid="";
        $i = 0;
        $menu = $this->m_home->getMenu($level);
        $parentid="0000";
        
        foreach($menu as $menus){
            
            $parent = $menu[$i]['menu_parent'];

            if($parent == $parentid ){
                $menuid = $menu[$i]['menu_id'];
                $child = $this->getChild($menu, $menuid);
                $listMenus .="<li class=\"nav-item nav-dropdown\">"
                        . "<a class=\"nav-link nav-dropdown-toggle\" href=\"#\"><i class=\"icon-cursor\"></i>". $menu[$i]['menu_name'] ."</a>"
                        . $child
                        ."</li>";
            }

            $i++;
        }

        return $listMenus;

    }

    public function getChild($menu, $menuid){

        $child="";
        $listMenus="";
        $i = 0;

        foreach($menu as $menus){
            $parent = $menu[$i]['menu_parent'];

            if( $parent == $menuid ){
                $child .= "<li class=\"nav-item\">"
                       .  "<a class=\"nav-link\" href=\"#\" target=\"_top\"><i class=\"icon-cursor\"></i>". $menu[$i]['menu_name']."</a>"
                       .  "</li>";
            }

            $i++;
        }

        if($child != ""){
            $listMenus .= "<ul class=\"nav-dropdown-items\">"
                    . $child
                    ."</ul>";
        }

        return $listMenus;

    }
}