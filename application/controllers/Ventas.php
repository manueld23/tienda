<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
    public function __construct() {
		parent:: __construct();
	}

	  public function index() {
	    $this->load->view('menu/header');
		$this->load->view('ventas');
	}

}