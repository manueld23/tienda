<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelRegistro extends CI_Model {
	public function __construct() {
        $this->load->database();
    }

    function registro() {
        $data = array (
            'nombre' => $this->input->post('nombre'),
            'correro' => $this->input->post('correo'),
            'usuario' => $this->input->post('usuario'),
            'password' => $this->input->post('password')
        );
        $this->db->insert('usuarios', $data);
    }

}