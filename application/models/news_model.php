<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    

    public function set_news($titulo,$texto) {

        $this->load->helper('url');
        $slug = 'Hola';
        /* url_title(). Esta función – provista por el helper URL - desarma la cadena que se le pasa, 
          reemplazando todos los espacios por guiones (-) y asegurando que todos los caracteres estén minúsculas.
          Esto le deja un bonito slug, perfecto para crear URIs. */

        $data = array(
            'title' => $titulo, //capturo los datos que me envian desde la vista
            'slug' => $slug,
            'text' => $texto
        );

        if($this->db->insert('news', $data)){
            return 2;
        }
    }

}
