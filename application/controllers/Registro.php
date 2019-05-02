<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct() {
		parent:: __construct();
		$this->load->model('ModelRegistro');
	}

	public function index() {
		$this->load->view('registro');
    }
    
    public function create() {
        $this->ModelRegistro->registro();
        $this->load->view('registro');
	}

	
}