<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('AdminModel');
    }

	function index()
	{
        $data['vid'] = $this->AdminModel->getAllVideo();
        $data['user'] = $this->AdminModel->getAllUser();
        $data['kom'] = $this->AdminModel->getAllKomen();
        $data['like'] = $this->AdminModel->getAllLike();
        $data['itube'] = $this->AdminModel->getAllMaster();

        $this->load->view('globalIn/headerAdmin');
        $this->load->view('admin', $data);
		$this->load->view('global/footer');
	}

    function delete($id){
        $this->AdminModel->deleteMaster($id);
        $this->AdminModel->deleteKomen($id);
        $this->AdminModel->deleteLike($id);
        $this->AdminModel->deleteVideo($id);

        $delete = $this->AdminModel->deleteUser($id);
        redirect('Admin');
    }

    function deleteVideo($id){
        $this->AdminModel->deleteMaster2($id);
        $this->AdminModel->deleteKomen2($id);
        $this->AdminModel->deleteLike2($id);

        $delete = $this->AdminModel->deleteVideo2($id);
        redirect('Admin');
    }

    function deleteKomen($id){
        $this->AdminModel->deleteMaster3($id);

        $delete = $this->AdminModel->deleteKomen3($id);
        redirect('Admin');
    }
    
}
