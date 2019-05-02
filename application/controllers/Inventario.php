<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {
    public function __construct() {
		parent:: __construct();
		$this->load->model('ModelInventario');
	}

	  public function index() {
			$this->load->view('menu/header');
			$data['result'] = $this->ModelInventario->getAllData();
			$this->load->view('inventario', $data);
	}

	public function create() {
		$this->ModelInventario->createData();
		redirect("Inventario");
	}

	public function edit($id) {
		echo $id;
		$data['row'] = $this->ModelMain->getData($id);
		//redirect("Main", $data);
		//$this->load->view('Inventario', $data);
	}
    public function update($id) {
        $this->ModelInventario->updateData($id);
        redirect("inventario");
    }
    public function delete($id) {
        $this->ModelInventario->deleteData($id);
        redirect("Inventario");
	}

}