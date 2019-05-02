<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMain extends CI_Model {
    var $table = 'inventario';
	public function __construct() {
        $this->load->database();
    }
    
    function createData() {
        $data = array (
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        );
        $this->db->insert('inventario', $data);
    }

    function getAllData() {
        $query = $this->db->query('SELECT * FROM inventario');
        return $query->result();
    }
    function getData($id) {
        $query = $this->db->query('SELECT * FROM inventario WHERE `id` =' .$id);
        return $query->row();
        /*$this->db->from($this->$table);
        $this->db->where('id',$id);
        $query = $this->db->get();
 
        return $query->row();*/
    }
    function updateData($id) {
        $data = array (
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        );
        $this->db->where('id', $id);
        $this->db->update('inventario', $data);
    }
    function deleteData($id) {
        $this->db->where('id', $id);
        $this->db->delete('inventario');
    }
}