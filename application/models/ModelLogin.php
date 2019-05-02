<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_Model {
    
    public $variable;

    public function __construct() {
        parent::__construct();
    }

    public function login($usuario, $password) {
        $this->db->where('usuario', $usuario);
        $this->db->where('password', $password);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0) {
            return true;
        }else {
            return false;
        }
    }
}