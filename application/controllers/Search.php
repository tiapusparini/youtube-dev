<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('url','html','form'));
    $this->load->model('UserModel');
  }

  public function index() {
    $cari = $this->input->post('cari');
    if($cari == 'All'){
      $dat['search'] = $this->UserModel->getAllVideo();
    }else if($cari == 'Berita' || $cari == 'Film' || $cari == 'Musik'){
      $dat['search'] = $this->UserModel->getAllVideoKategori($cari);
    }else{
      $dat['search'] = $this->UserModel->getBySearch($cari);
    }

    if ($_SESSION['logged_in']) {
      if($_SESSION['email'] == 'admin@gmail.com'){
        $this->load->view('globalIn/headerAdmin');
        $this->load->view('hasil', $dat);
        $this->load->view('global/footer');
      }else{
        $this->load->view('globalIn/header');
        $this->load->view('hasil', $dat);
        $this->load->view('global/footer');
        
      }
    }else{
        $this->load->view('global/header');
        $this->load->view('hasil', $dat);
        $this->load->view('global/footer');
    }
  }


}