<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Categorias extends CI_Model {

    public function cargaproductos() {
        $consulta = $this->db->get('cat_categorias');
        return $consulta->result();
    }

    public function buscaproductoscrit($criterio) {
        $consulta = $this->db->query("select * from cat_categorias where nom_cat like '%$criterio%'");
        return $consulta->result();
    }

    public function buscaestadoscrit($criterio) {
        $this->db->select('e.Id_est,e.Nom_est,m.Id_mun,m.Nom_mun');
        $this->db->from('cat_estados e');
        $this->db->join('cat_municipios m', 'e.Id_est = m.Id_est');
        $this->db->like('e.Nom_est', $criterio);
        $query = $this->db->get();
        return $query->result();
    }

    public function buscamunicipioscrit($criterio) {
        $consulta = $this->db->query("select * from cat_municipios where nom_mun like '%$criterio%'");
        return $consulta->result();
    }

    public function buscasubcategoriascrit($criterio) {
        $consulta = $this->db->query("select * from cat_subcategoria where nom_subcat like '%$criterio%'");
        return $consulta->result();
    }

    public function buscausuarioscrit($criterio) {
        $consulta = $this->db->query("select * from cat_usuarios where nom_user like '%$criterio%'");
        return $consulta->result();
    }

    public function consultaCategorias($criterio) {
        $this->db->select('c.Id_cat,c.Nom_cat,s.Id_subcat,s.Nom_subcat');
        $this->db->from('cat_categorias c');
        $this->db->join('cat_subcategoria s', 'c.Id_cat = s.Id_cat');
        $this->db->like('c.Nom_cat', $criterio);
        $query = $this->db->get();
        return $query->result();
    }

    public function mostrar($valor, $indice = FALSE, $cantidad = FALSE) {
        /* $this->db->like("nombres_empleado",$valor);
          $this->db->or_like('apellidos_empleado', $valor);
          $consulta = $this->db->get("empleados");
          return $consulta->result(); */

        $this->db->select('*');
        $this->db->from('empleados');
        $this->db->join('usuarios', 'usuarios.id_usuario = empleados.id_usuario');
        $this->db->like("empleados.nombres_empleado", $valor);
        $this->db->or_like('empleados.apellidos_empleado', $valor);
        $consulta = $this->db->get();
        return $consulta->result();
    }

    public function buscausuario($id) {

        $query = $this->db->query("SELECT * FROM users WHERE id = '$id' ");
        
        return $query->result();
        //Retorna todos los registros de la tabla Usuarios
        
    }
    
    function mostrarCat($valor, $indice = FALSE, $cantidad = FALSE) {
        /* $this->db->like("nombres_empleado",$valor);
          $this->db->or_like('apellidos_empleado', $valor);
          $consulta = $this->db->get("empleados");
          return $consulta->result(); */

        $this->db->select('*');
        $this->db->from('cat_categorias');
        $this->db->join('cat_subcategoria', 'cat_subcategoria.Id_cat = cat_categorias.Id_cat');
        $this->db->like("cat_categorias.Nom_cat", $valor);
        $this->db->or_like('cat_subcategoria.Nom_subcat', $valor);
        $consulta = $this->db->get();
        return $consulta->result();
    }
    
    function mostrarMun($valor, $indice = FALSE, $cantidad = FALSE) {
        /* $this->db->like("nombres_empleado",$valor);
          $this->db->or_like('apellidos_empleado', $valor);
          $consulta = $this->db->get("empleados");
          return $consulta->result(); */

        $this->db->select('*');
        $this->db->from('cat_municipios');
        $this->db->join('cat_estados', 'cat_estados.Id_est = cat_municipios.Id_est');
        $this->db->like("cat_municipios.Nom_mun", $valor);
//        $this->db->or_like('cat_municipios.Nom_est', $valor);
        $consulta = $this->db->get();
        return $consulta->result();
    }   

    public function cargaanuncios(){
        $id = $this->tank_auth->get_user_id();
        $consulta = $this->db->query("SELECT * FROM det_anuncios WHERE id = '$id'");
//        $consulta = $this->db->get();
        return $consulta->result();
    }

     public function infousuario($id) {
        
        //$query = $this->db->query("SELECT * FROM cat_usuarios WHERE Id_user='$id'");
        $this->db->select('u.`username` AS Nickname, e.`Id_est` AS idest, e.`Nom_est` AS estado, m.`Id_mun` AS idmun, m.`Nom_mun` AS municipio')
                ->from('users AS u, cat_estados AS e, cat_municipios AS m')
                ->where('u.`Id_est` = e.`Id_est`')
                ->where('u.`Id_mun` = m.`Id_mun`')
                ->where('m.`Id_est` = e.`Id_est`')
                ->where('u.`id`',$id);
        
//        $query = $this->db->query("SELECT * FROM cat_usuarios AS u, cat_estados AS e, cat_municipios AS m WHERE u.`Id_est` = e.`Id_est` AND u.`Id_mun` = m.`Id_mun` AND m.`Id_est` = e.`Id_est` AND u.`Id_user` = '$id'");
        $query = $this->db->get();
        return $query->result();
        //Retorna todos los registros de la tabla Usuarios
        
    }
}
