<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	function guardar($data){

		$this->db->insert("usuarios", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}

	}
	function mostrar($valor){
		$this->db->like("nombres",$valor);
		$this->db->or_like('apellidos', $valor); 
		$consulta = $this->db->get("usuarios");
		return $consulta->result();
	}
}