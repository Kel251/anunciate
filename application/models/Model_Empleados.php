<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Empleados extends CI_Model {

    function guardar($data) {
        $this->db->insert("empleados", $data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mostrar($valor, $indice = FALSE, $cantidad = FALSE) {
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

    function mostrarAnuncio($valor, $indice = FALSE, $cantidad = FALSE) {
        $id = $this->tank_auth->get_user_id();
        /* $this->db->like("nombres_empleado",$valor);
          $this->db->or_like('apellidos_empleado', $valor);
          $consulta = $this->db->get("empleados");
          return $consulta->result(); */
//		$this->db->select('*');
//		$this->db->from('det_anuncios');
//                $this->db->where('Id_user',$id);
//		$this->db->join('det_imagenes', 'det_imagenes.email_rel = det_anuncios.email');
//		$this->db->like("Anuncio",$valor);
//		$this->db->or_like('Descripcion', $valor); 
        $consulta = $this->db->query("SELECT * 
FROM det_anuncios AS a, cat_estados AS e, cat_municipios AS m, cat_categorias AS c, cat_subcategoria AS s
WHERE a.`Id_est` = e.`Id_est` AND a.`Id_mun` = m.`Id_mun` AND e.`Id_est` = m.`Id_est` AND a.`Id_cat` = c.`Id_cat` AND a.`Id_subcat` = s.`Id_subcat`
AND c.`Id_cat` = s.`Id_cat` AND id = '$id' AND anuncio LIKE '%$valor%'");
//        $consulta = $this->db->get();
        return $consulta->result();
    }

    function actualizar($id, $data) {
        $this->db->where('id_empleado', $id);
        $this->db->update('empleados', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function eliminar($id) {
        $this->db->where('id_empleado', $id);
        $this->db->delete('empleados');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function capturarImagen($id) {
        $this->db->select("foto_empleado");
        $this->db->where("id_empleado", $id);
        $this->db->from("empleados");
        $resultado = $this->db->get();
        return $resultado->row();
    }

    function capturarImagen2($id) {
        $this->db->select("archivo");
        $this->db->where("Id_anun", $id);
        $this->db->from("det_anuncios");
        $resultado = $this->db->get();
        return $resultado->row();
    }

    function eliminar2($id) {
        $this->db->where('Id_anun', $id);
        $this->db->delete('det_anuncios');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function actualizar2($id, $data) {
        $this->db->where('Id_anun', $id);
        $this->db->update('det_anuncios', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
