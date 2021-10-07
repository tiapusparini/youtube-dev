<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper(array('url','html','form'));
    $this->load->model('UserModel');
  }

  public function index() {
    $this->load->view('globalIn/header');
    $this->load->view('upload');
    $this->load->view('global/footer');

  }

  public function add_video(){
    $email = $_SESSION['email'];
    $dat['res'] = $this->UserModel->getUserByEmail($email);
    $id = $dat['res'];
    unset($config);
    $date = date("ymd");
    $configVideo['upload_path'] = 'asset/video/'; # check path is correct
    $configVideo['max_size'] = '100000000';
    $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4'; # add video extenstion on here
    $configVideo['overwrite'] = FALSE;
    $configVideo['remove_spaces'] = TRUE;
    $video_name = $date.$this->input->post('kategori').$id['0']->id_user;
    $configVideo['file_name'] = $video_name;

    $this->load->library('upload', $configVideo);
    $this->upload->initialize($configVideo);

    if ($this->upload->do_upload('video')) # form input field attribute
    {
        # Upload Successfull
        $url = 'asset/video/'.$video_name;
        $set1 =  $this->UserModel->uploadData($url, $date, $id['0']->id_user);
        $this->session->set_flashdata('hasil', 'Video Has been Uploaded');
        redirect('Upload');
    }
    else
    {
        # Upload Failed
        $this->session->set_flashdata('hasil', $this->upload->display_errors());
        redirect('Upload');
    }
    
  }


}