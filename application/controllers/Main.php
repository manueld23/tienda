<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('ModelMain');
	}

	public function index()
	{
		$this->load->view('menu/header');
		$data['result'] = $this->ModelMain->getAllData();
		$this->load->view('main', $data);
	}

    /*public function header() {
		$this->load->view('menu/header');
	}*/

	

	public function create() {
		$this->ModelMain->createData();
		redirect("Main");
	}

	public function edit($id) {
		$data['row'] = $this->ModelMain->getData($id);
		//redirect("Main", $data);
		$this->load->view('main', $data);
	}
    public function update($id) {
        $this->ModelMain->updateData($id);
        redirect("main");
    }
    public function delete($id) {
        $this->ModelMain->deleteData($id);
        redirect("Main");
	}
}