<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ciudades_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
// PROVINCIA ES PRIMERO Y POBLACION DESPUES
    public function selEstados() {
        $this->db->order_by('Nom_est', 'asc');
        $estados = $this->db->get('cat_estados');
        if ($estados->num_rows() > 0) {
            return $estados->result();
        }
    }

    public function selMunicipios($id_est) {
        $this->db->where('Id_est', $id_est);
        $this->db->order_by('Nom_mun', 'asc');
        $municipios = $this->db->get('cat_municipios');
        if ($municipios->num_rows() > 0) {
            return $municipios->result();
        }
    }

}
