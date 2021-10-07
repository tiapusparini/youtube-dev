<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('UserModel');
    }

	function index()
	{
        $dat = 'Musik';
        $data['result'] = $this->UserModel->getAllVideoKategori($dat);
        $this->load->view('global/header');
        $this->load->view('home', $data);
		$this->load->view('global/footer');
	}

    function login()
    {
        $this->load->view('global/header');
        $this->load->view('login');
        $this->load->view('global/footer');
        
    }

    function registrasi()
    {
        $this->load->view('global/header');
        $this->load->view('register');
        $this->load->view('global/footer');
    }

    function detail($id){
        $kate = $this->input->post('kategori');
        $data['result'] = $this->UserModel->getById($id);
        $data['dat'] = $this->UserModel->getVU($kate);
        $data['kom'] = $this->UserModel->getKomen($id);
        $_SESSION['id_video'] = $id;
        
        if ($_SESSION['logged_in']) {
            if($_SESSION['email'] == 'admin@gmail.com'){
                $this->load->view('globalIn/headerAdmin');
                $this->load->view('view', $data);
                $this->load->view('global/footer');
            }else{
                $this->load->view('globalIn/header');
                $this->load->view('view', $data);
                $this->load->view('global/footer');   
            }
        }else{
            $this->load->view('global/header');
            $this->load->view('view', $data);
            $this->load->view('global/footer');
        }
    }
}
