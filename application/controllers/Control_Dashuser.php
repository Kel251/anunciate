<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Control_Dashuser extends CI_Controller {

    function __construct() {
        parent::__construct();
//        if (!$this->session->userdata("login")) {
//            redirect(base_url());
//        }
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        $this->load->model('Ciudades_model');
        $this->load->model('Model_Categorias');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Model_Usuario');
        $this->load->model('Model_Anuncio');
    }

    public function index() {
//        $cookies = $this->input->cookie('ebank_idusu_cookie');
////        echo 'Hollalaa'.$cookies;c
//        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);

        $data['contenido'] = $this->Model_Categorias->cargaanuncios();
//        $data['user_id'] = $this->tank_auth->get_user_id();
        $data['username'] = $this->tank_auth->get_username();
        //$this->load->view('plantillas/back_end/header',$data);
        $this->load->view('plantillas/back_end/header',$data);
        $this->load->view('plantillas/back_end/sidebarin',$data);
        $this->load->view('plantillas/back_end/contenido',$data);
        $this->load->view('plantillas/back_end/footer');
    }
    
    public function dashboard() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);

        $data['contenido'] = $this->Model_Categorias->cargaanuncios();
//        $data['user_id'] = $this->tank_auth->get_user_id();
        $data['username'] = $this->tank_auth->get_username();
        $data['stats'] = $this->Model_Usuario->stats($id);
        $this->load->view('plantillas/back_end/headerin',$data);
        $this->load->view('plantillas/back_end/sidebarin',$data);
        $this->load->view('plantillas/back_end/dashboard');
        $this->load->view('plantillas/back_end/footerin');
    }

    public function muestraCategorias() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->cargaproductos();
        $this->load->view('productosv', $data);
    }

    public function Categorias() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Categorias');
        $this->load->view('plantillas/back_end/footer');
    }

    public function Estados() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Consulta_Estados');
        $this->load->view('plantillas/back_end/footer');
    }
    
    public function Municipios() {
        $id = $this->tank_auth->get_user_id();
            $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Consulta_Municipios');
        $this->load->view('plantillas/back_end/footer');
    }

    public function Subcategorias() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Consulta_Subcat');
        $this->load->view('plantillas/back_end/footer');
    }

    public function Usuarios() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Consulta_Usuarios');
        $this->load->view('plantillas/back_end/footer');
    }

    public function cargainformacion() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->consultaCategorias($criterio);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Result_cate', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function cargainformacionest() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->buscaestadoscrit($criterio);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Result_Est', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function cargainformacionmun() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->buscamunicipioscrit($criterio);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Result_Mun', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function cargainformacionsubcat() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->buscasubcategoriascrit($criterio);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Result_Subcat', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function cargainformacionusuarios() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $criterio = $this->input->post('criterio');
        $this->load->model('Model_Categorias');
        $data['resultado'] = $this->Model_Categorias->buscausuarioscrit($criterio);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Result_Usuarios', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function Anunciate() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
//        $cookies = $this->input->cookie('ebank_idusu_cookie');
//        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $data['selEstado'] = $this->Model_Anuncio->selEstado();
        $data['selCategoria'] = $this->Model_Anuncio->selCategoria();

        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Anunciate', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function Edita() {
        $data['selEstado'] = $this->Ciudades_model->selEstados();
        $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebarin', $data);
        $this->load->view('back_end/empleados',$data);
        $this->load->view('plantillas/back_end/footer');
    }

    public function anunciosrapido() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Datos_Anuncio');
        $this->load->view('plantillas/back_end/footer');
    }

    public function perfil() {
        $id = $this->tank_auth->get_user_id();
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $cookies = $this->input->cookie('ebank_idusu_cookie');
        $data['cook'] = $this->Model_Usuario->cook($cookies);
        

        $data['selEstado'] = $this->Model_Anuncio->selEstado();
        $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
        $data['info'] = $this->Model_Categorias->infousuario($id);
        $data['usuario'] = $this->Model_Categorias->buscausuario($id);
        $this->load->view('plantillas/back_end/header', $data);
        $this->load->view('plantillas/back_end/sidebar', $data);
        $this->load->view('back_end/Datos_Perfil', $data);
        $this->load->view('plantillas/back_end/footer');
    }

    function mostrar() {
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post("buscar");
            $datos = $this->Model_Categorias->mostrar($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    function mostrarCate() {
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post("buscar");
            $datos = $this->Model_Categorias->mostrarCat($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }
    
    function mostrarMun() {
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post("buscar");
            $datos = $this->Model_Categorias->mostrarMun($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    public function updateUser() {
        $datos = $this->input->post();
        $this->form_validation->set_rules('telefono', 'telefono', 'required|numeric|min_length[7]|max_length[10]');
        $this->form_validation->set_rules('nickname', 'nickname', 'required|alpha_numeric_spaces|callback_check_nickname');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|callback_check_email');
        $this->form_validation->set_rules('website', 'website', 'valid_url');
        $this->form_validation->set_rules('nombre', 'nombre', 'required|trim|validanombre');
        $this->form_validation->set_rules('social', 'Red Social', 'valid_url');
        $this->form_validation->set_rules('apellido', 'apellido', 'required|validanombre');
        $this->form_validation->set_rules('acerca', 'acerca', 'trim|validatexto');
        $id = $this->tank_auth->get_user_id();
        //SE SELECCIONA LA RUTA EN DONDE SE CARGARAN LOS ARCHIVOS
        $config['upload_path'] = './img/cargas/';
        //ESPECIFICA LOS TIPOS DE ARCHIVOS PERMITIDOS
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //ESTABLECE LAS DIMENCIONES PREDETERMINAS PARA LOS ARCHIVOS
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
        //CARGA LA LIBRERYA UPLOAD, Y ENVIO LOS DATOS DE CONFIGURACIÓN
        $this->load->library('upload', $config);
        if ($this->form_validation->run() === FALSE) {
            $id = $this->tank_auth->get_user_id();        
            $data['usuario'] = $this->Model_Categorias->buscausuario($id);
            $this->load->view('plantillas/back_end/header', $data);
            $this->load->view('plantillas/back_end/sidebar', $data);
            $this->load->view('plantillas/back_end/contenido', $data);
            $this->load->view('plantillas/back_end/footer');
        } elseif ($this->upload->do_upload('foto_nueva') and isset($datos)) {
            //MOSTRARA TODOS LOS VALORES DEL ARCHIVO SUBIDO 
            $registro = $this->Model_Usuario->capturarImagen($id);
            //unlink("./img/cargas/" . $registro->Foto_perfil);
            $data = array("upload_data" => $this->upload->data());

            $acerca = $datos['acerca'];
            $telefono = $datos['telefono'];
            $nickname = $datos['nickname'];
            $email = $datos['email'];
            $anunciante = $datos['anunciante'];
            $website = $datos['website'];
            $nombre = $datos['nombre'];
            $social = $datos['social'];
            $apellido = $datos['apellido'];
            
            
            //ENVÍA LOS DATOS RECIBIDOS DEL FORMULARIO A LA FUNCIÓN INSERTA USUARIO DEL MODELO USUARIO 
             $dato['proc'] = $this->Model_Usuario->updateUser($acerca, $telefono, $nickname, $email, $anunciante, $website, $nombre, $social, $apellido, $data['upload_data']['file_name']);
             redirect('Control_Dashuser/index');
        } else {

            $acerca = $datos['acerca'];
            $telefono = $datos['telefono'];
            $nickname = $datos['nickname'];
            $email = $datos['email'];
            $anunciante = $datos['anunciante'];
            $website = $datos['website'];
            $nombre = $datos['nombre'];
            $social = $datos['social'];
            $apellido = $datos['apellido'];
            
            $this->Model_Usuario->updateUsersf($acerca, $telefono, $nickname, $email, $anunciante, $website, $nombre, $social, $apellido);
            redirect('Control_Dashuser/index');
        }
    }

    public function check_email($email) {
        $id = $this->tank_auth->get_user_id();
        if ($this->Model_Usuario->check_email($email, $id)) {
            $this->form_validation->set_message('check_email', 'El correo ' . $email . ' ya se encuentra registrado');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_nickname($nickname) {
        $id = $this->tank_auth->get_user_id();
        if ($this->Model_Usuario->check_nickname($nickname, $id)) {
            $this->form_validation->set_message('check_nickname', 'Este usuario ' . $nickname . ' ya se encuentra registrado');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //ACTUALIZAR FOTO DE PORTADA
    public function updatefoto (){
        $config['upload_path'] = './img/cargas/';
        //ESPECIFICA LOS TIPOS DE ARCHIVOS PERMITIDOS
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //ESTABLECE LAS DIMENCIONES PREDETERMINAS PARA LOS ARCHIVOS
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
        //CARGA LA LIBRERYA UPLOAD, Y ENVIO LOS DATOS DE CONFIGURACIÓN
        $this->load->library('upload', $config);
        $id = $this->tank_auth->get_user_id();
        if ($this->upload->do_upload('portada')) {
            //MOSTRARA TODOS LOS VALORES DEL ARCHIVO SUBIDO 
            //$registro = $this->Model_Usuario->capturarImagen($id);
            //unlink("./img/cargas/" . $registro->Foto_perfil);
            $data = array("upload_data" => $this->upload->data()); 
            $this->Model_Usuario->updatefoto($id,$data['upload_data']['file_name']);
            redirect('Control_Dashuser/index');
        }
    }

    public function marker(){
        $this->load->view("plantillas/front_end/header");
        $this->load->view("plantillas/back_end/geolocalizar");
    }
    

    ///funcion que recibe los valores obtenidos del mapa
    public function cargar(){
        $id = $this->tank_auth->get_user_id();
        if ($this->input->is_ajax_request()) {
            $lat = $this->input->post("lat");
            $lng = $this->input->post("lng");
            $datos = $this->Model_Usuario->cargar($lat,$lng,$id);
            echo json_encode($datos);
        } else {
            show_404();
        }
//        Nuevo en github
    }

}
