<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
    }

	function index()
	{
        $dat = 'Musik';
        $data['result'] = $this->UserModel->getAllVideoKategori($dat);
        $this->load->view('global/header');
        $this->load->view('home', $data);
        $this->load->view('global/footer');
	}

    function prosesregist()
    {
        $data = array(
            'nama'            => $this->input->post('nama'),
            'birth'          => $this->input->post('birth'),
            'jeniskelamin'   => $this->input->post('jeniskelamin'),
            'alamat'          => $this->input->post('alamat'),
            'email'            => $this->input->post('email'),
            'password'          => $this->input->post('password'));
        $this->UserModel->register($data);
        redirect(site_url('Home'));
    }

    public function prosesLogin(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $id=$this->UserModel->login($data);
        if ($id != null) {
            $result = $id->result_array();
            $data = array(
                'nama' => $result[0]['nama'],
                'email' => $result[0]['email'],
                'logged_in' => true
            );

            $this->session->set_userdata($data);
            if ($data['email'] == 'admin@gmail.com') {
                redirect(site_url('Admin'));
            }else{
                $this->home();
            }
        }else{
            //need to show something the user about wrong login
            $this->session->set_flashdata('hasil', 'Email atau Password yang anda masukkan salah');
            redirect(site_url('Home/login'));
        }
    }

    public function home(){
        if ($_SESSION['logged_in']) {
            redirect(site_url('User/userHome'));
        }else{
            redirect(site_url('User/'));
        }
    }

    function userHome()
    {
        $dat = 'Musik';
        $data['result'] = $this->UserModel->getAllVideoKategori($dat);
        $this->load->view('globalIn/header');
        $this->load->view('home', $data);
        $this->load->view('global/footer');
    }

    public function upload(){
        $this->load->view('globalIn/header');
        $this->load->view('upload');
        $this->load->view('global/footer');
    }

    public function komen(){
        $data['message'] = $this->input->post('message');
        $date = date("ymd");
        if(!isset($_SESSION['logged_in'])){
            $this->load->view('global/header');
            $this->load->view('login');
            $this->load->view('global/footer');
        }else{
            $email = $_SESSION['email'];
            $dat['res'] = $this->UserModel->getUserByEmail($email);
            $user = $dat['res'];
            $id_video = $this->input->post('id_video');
            $res['dat'] = $this->UserModel->InsertKomen($data, $id_video, $user->id_user, $date);
            redirect(site_url('Home/detail/'.$id_video));
        }
    }

    public function like($id){
        if(!isset($_SESSION['logged_in'])){
            $this->load->view('global/header');
            $this->load->view('login');
            $this->load->view('global/footer');
        }else{
            $data = $this->UserModel->getLike($id);
            redirect(site_url('Home/detail/'.$id));      
        }
    }

    public function profile(){
        $email = $_SESSION['email'];
        $dat['res'] = $this->UserModel->getUserByEmail($email);
        $this->load->view('globalIn/header');
        $this->load->view('profile', $dat);
        $this->load->view('global/footer');
    }
    public function logout(){
        foreach ($_SESSION as $key => $value) {
            $_SESSION[$key] = null;
        }
        redirect(site_url('User'));
    }
}
