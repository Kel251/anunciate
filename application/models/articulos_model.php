<?php

class Articulos_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }
    //Genera listado de Articulos
    function lista_articulos()
    {
        $this->db->order_by('id_articulo','desc');
        $consulta = $this->db->get('articulos');
        return $consulta->result();
    }
    
    //Muestra detalle de articulo pro ID
    /*
    function detalle_articulo($id_articulo)
    {
        $this->db->where('id_articulo',$id_articulo);
        $consulta = $this->db->get('articulos');
        return $consulta->row();
    }
    
    */
//    function detalle_articulo($nombre_articulo)
//    {
//        $this->db->where('nombre_articulo',$nombre_articulo);
//        $consulta = $this->db->get('articulos');
//        return $consulta->row();
//    }
    
     function detalle_articulo($url_articulo)
    {
        $this->db->where('url_articulo',$url_articulo);
        $consulta = $this->db->get('articulos');
        return $consulta->row();
    }
}

