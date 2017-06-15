<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Anuncio extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Selecciona los registros de la tabla Cat_estados en la BD 
    public function selEstado() {
//        $query = $this->db->query('Select * from Cat_estados');
//        return $query->result();

        $this->db->order_by('Nom_est', 'asc');
        $consulta1 = $this->db->get('cat_estados');
        return $consulta1->result();
    }

    //Selecciona los registros de la tabla Cat_categoria en la BD 
    public function selCategoria() {
//        $query = $this->db->query('Select * from Cat_estados');
//        return $query->result();

        $this->db->order_by('Nom_cat', 'asc');
        $consulta = $this->db->get('cat_categorias');
        return $consulta->result();
    }

    //Selecciona los registros de la tabla Cat_municipios en la BD 
    public function selMunicipio($id_est) {
        //$this->db->order_by('Nom_mun','asc');
        $query = $this->db->query("SELECT Nom_mun FROM cat_municipios WHERE Id_est='.$id_est.' AND activo='Si' ORDER BY Nom_mun ASC");
        return $query->result();
//        $this->db->where('Id_est',$id_est);
//        $this->db->order_by('Nom_mun','asc');
//        $consulta = $this->db->get('Cat_Municipios');
//        return $consulta->result();
    }

    //Selecciona los registros de la tabla Cat_subcatecorias en la BD 
    public function selSubcategorias($id_cat) {
        $this->db->where('Id_cat', $id_cat);
        $this->db->order_by('Nom_subcat', 'asc');
        $consultas = $this->db->get('cat_subcategoria');
        if ($consultas->num_rows() > 0) {
            return $consultas->result();
        }
    }
    
    public function nextuser(){
        
        $consulta = $this->db->query("SELECT id_user FROM cat_usuarios ORDER BY id_user DESC LIMIT 1");
        return $consulta;
    }

    //RECIBE LOS DATOS DEL CONTROL_ANUNCIO
    public function insertAnuncio($categoria, $subcategoria, $estado, $municipio,$fecha, $titulo, $descripcion, $precio, $nombre, $telefono, $email,$img) {

//        INSERTA LOS REGISTROS DEL FORMULARIO ANUNCIO MEDIANTE PROCEDIMIENTO ALMACENADO EN B.D 
        $consulta = $this->db->query("CALL createanunciofront ('$titulo','$descripcion','$img','$categoria','$subcategoria','$estado','$municipio','$fecha','$nombre','$telefono','$email','$precio',@result);");
        $resultadoalta = $this->db->query("SELECT @result AS resultado");
        return $resultadoalta->result();

//        INSERTA LOS REGISTROS DEL FORMULARIO ANUNCIO MEDIANTE ARREGLO CON NOMENCLATURA CODEIGNEITER
//        $arrayDatosAnuncio = array(
//            'id_cat' => $categoria,
//            'Id_subcat' => $subcategoria,
//            'Id_est' => $estado,
//            'Id_mun' => $municipio,
//            'anuncio' => $titulo,
//            'descripcion' => $descripcion,
//            'precio' => $precio,
//            'nombre' => $nombre,
//            'telefono' => $telefono,
//            'email' => $email
//        );
//        $this->db->insert('det_anuncios', $arrayDatosAnuncio);
    }

    public function insertAnuncioback($categoria, $subcategoria, $id, $estado, $municipio, $titulo, $descripcion, $precio, $telefono,$img,$fecha) {

//        INSERTA LOS REGISTROS DEL FORMULARIO ANUNCIO MEDIANTE PROCEDIMIENTO ALMACENADO EN B.D 
        $consulta = $this->db->query("CALL createAnuncioUserback ('$titulo','$descripcion','$img','$id','$categoria','$subcategoria','$estado','$municipio','$fecha','$telefono','$precio',@result);");
        $resultadoalta = $this->db->query("SELECT @result AS resultado");
        return $resultadoalta->result();
    }

    public function guardar($datos) {
        return $this->db->insert("det_imagenes", $datos);
    }

    public function updateAnuncio($id_anun, $anuncio, $descripcion, $telefono, $email) {
        

        $query = $this->db->query("SELECT updateanuncio ('$id_anun','$descripcion','$anuncio','$telefono','$email') AS resultado;");
        $query2 = $this->db->query("SELECT @result AS resultado");

        return $query2->result();
    }

    public function siguiente(){
        $consulta = $this->db->query("CALL siguienteanun(@resultado);");
        $result = $this->db->query("SELECT @resultado AS resul");
        return $result->result();
    }

}
