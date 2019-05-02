<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	public function __construct() {
		parent::__construct();
	}

	public function index() {
        if($this->session->userdata('usuario')){
			redirect('main');
		}
		if(isset($_POST['password'])){
		$this->load->model('ModelLogin');
		if($this->ModelLogin->login($_POST['usuario'],$_POST['password'])){
			$this->session->set_userdata('usuario',$_POST['usuario']);
            redirect('main');
		}else{
			redirect('login');
		}
	}
		$this->load->view('login');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('login');
	}
}