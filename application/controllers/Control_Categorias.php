<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Categorias extends CI_Controller {

    public function muestraproductos() {
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->cargaproductos();
        $this->load->view('productosv', $data);
    }

//    public function buscaproducto() {
//        $this->load->view('buscaproducto');
//    }

    public function cargainformacion() {
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->buscaproductoscrit($criterio);    
        
//        $this->load->view('plantillas/front_end/header');
//        $this->load->view('usuario/index');
        //$this->load->view('plantillas/front_end/sidebar',$data);
        //$this->load->view('front_end/Ensenanza');
//         $this->load->view('back_end/Dash_User');
        $this->load->view('back_end/Categorias', $data);
//        $this->load->view('plantillas/front_end/footer');
    }
    
    
}