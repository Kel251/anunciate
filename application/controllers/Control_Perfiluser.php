<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Control_Perfiluser extends CI_Controller {

    function __construct() {
        parent::__construct();             
    }

    public function index() {
        //CARGA LA FUNCION SELECCIONA ESTADOS DEL MODELO DE CIUDADES 
        //$data['selEstado'] = $this->Ciudades_model->selEstados();
        $this->load->view('plantillas/front_end/header');
        $this->load->view('usuario/index');
        //$this->load->view('plantillas/front_end/sidebar',$data);
        //$this->load->view('front_end/Ensenanza');
        $this->load->view('front_end/Perfil_User');
        $this->load->view('plantillas/front_end/footer');
    }

    
}