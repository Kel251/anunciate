<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Control_Anuncio extends CI_Controller {

    function __construct() {
        parent::__construct();

        //CARGA EL MODELO CONTROL_ANUNCIO
        $this->load->model('Model_Anuncio');
        $this->load->model('Model_Categorias');
        $this->load->library('form_validation');
        $this->load->helper(array('form'));
        $this->load->model('Model_Usuario');
        $id = $this->session->userdata('id');
        $cookie = array('name' => 'idusu_cookie',
            'value' => $id,
            'expire' => time() + 86500,
            'path' => '/',);
        $this->input->set_cookie($cookie);
    }

    //CARGA LAS VISTAS PRINCIPALES
    public function index() {
        //$data['contenido'] = 'front_end/Anuncio';
        //LLAMADA A LA CONSULTA PARA CARGAR LOS ESTADOS EN EL FORMULARIO PUBLICA
        $data['selEstado'] = $this->Model_Anuncio->selEstado();
        //LLAMADA A LA CONSULTA PARA CARGAR LAS CATEGORIAS EN EL FORMULARIO PUBLICA
        $data['selCategoria'] = $this->Model_Anuncio->selCategoria();

//    $data['dato'] = $this->Model_Anuncio->nextuser();
        //CARGA LAS VISTAS ADJUNTANDO LA VARIABLE DATA
        $this->load->view('plantillas/front_end/header');
        $this->load->view('usuario/index');
        $this->load->view('plantillas/front_end/sidebar', $data);
//        //ENVIA LA VARIABLE ERROR EN ARREGLO PARA LA VALIDACION EN EL INPUT IMAGE
        $this->load->view('front_end/Anuncio', $data, array('error' => ' '));
        $this->load->view('plantillas/front_end/footer');
    }

    //FUNCIÓN PARA LLENAR LAS SUBCATEGORIAS DEL JAVASCRIPT EN EL COMBO DINAMICO
    public function llenaSubcategorias() {
//        $options = "";
        if ($this->input->post('idcategoria')) {
            $id_cat = $this->input->post('idcategoria');
            $subcat = $this->Model_Anuncio->selSubcategorias($id_cat);
            foreach ($subcat as $fila) {
                ?>
                <option value="<?php echo $fila->Id_subcat ?>"><?php echo $fila->Nom_subcat ?></option>
                <?php
            }
        }
    }

    public function insert() {

        //CARGO LA INFORMACION RECIBIDA POR POST, EN NUVA VARIABLE
        $datos = $this->input->post();
        //REALIZA LA VALIDACIÓN DE LOS CAMPOS
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');
        $this->form_validation->set_rules('subcategoria', 'Subcategoria', 'required');
        $this->form_validation->set_rules('estado', 'Estado', 'required');
        $this->form_validation->set_rules('municipio', 'Municipio', 'required');
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required|min_length[7]|max_length[10]|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $emailrel = $this->input->post('email');
//        //SE SELECCIONA LA RUTA EN DONDE SE CARGARAN LOS ARCHIVOS
//        $config['upload_path'] = './img/cargas/';
//        //ESPECIFICA LOS TIPOS DE ARCHIVOS PERMITIDOS
//        $config['allowed_types'] = 'gif|jpg|png';
//        //ESTABLECE LAS DIMENCIONES PREDETERMINAS PARA LOS ARCHIVOS
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
//        
//        $this->load->library("upload");
        $config = array(
            "upload_path" => "./img/cargas",
            'allowed_types' => "jpg|png"
        );
        $variablefile = $_FILES;
        $info = array();
        $files = count($_FILES['archivo']['name']);
        //CARGA LA LIBRERYA UPLOAD, Y ENVIO LOS DATOS DE CONFIGURACIÓN
        $this->load->library('upload', $config);



//        $this->form_validation->set_message('required', 'El campo  no posse un email valido');
        //MENSAJE PARA MOSTRAR ERRORES EN FORMULARIO
        $this->form_validation->set_error_delimiters('<div class="solid-green">', '</div>');

        //CONDICIONAL PARA VERIFICAR VALIDACION DEL FORMULARIO O SI HAN OCURRIDO ERRORES EN LA SELECCIÓN DE LA IMAGEN
        // 'imagen' ES EL NOMBRE ESTABLECIDO EN EL INPUT FILE

        if ($this->form_validation->run() === FALSE) {

            $data['selEstado'] = $this->Model_Anuncio->selEstado();
            $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
            //CARGA TODAS LAS VISTAS EN CASO DE QUE EXISTAN ERRORES
            $this->load->view('plantillas/front_end/header');
            $this->load->view('usuario/index');
            $this->load->view('plantillas/front_end/sidebar', $data);
            $this->load->view('front_end/Anuncio', $data);
            $this->load->view('plantillas/front_end/footer');
        } else {
            for ($i = 0; $i < $files; $i++) {
                $_FILES['archivo']['name'] = $variablefile['archivo']['name'][$i];
                $_FILES['archivo']['type'] = $variablefile['archivo']['type'][$i];
                $_FILES['archivo']['tmp_name'] = $variablefile['archivo']['tmp_name'][$i];
                $_FILES['archivo']['error'] = $variablefile['archivo']['error'][$i];
                $_FILES['archivo']['size'] = $variablefile['archivo']['size'][$i];
                $this->upload->initialize($config);

                if ($this->upload->do_upload('archivo')) {
                    $data = array("upload_data" => $this->upload->data());
                    $img1 = $data['upload_data']['file_name'];
                    $datos2 = array(
                        "nom_img" => $data['upload_data']['file_name'],
                        "email_rel" => $emailrel,
                    );
                    if ($this->Model_Anuncio->guardar($datos2)) {
                        //echo "Registro guardado";
                        $info[$i] = array(
                            "archivo" => $data['upload_data']['file_name'],
                            "mensaje" => "Archivo subido y guardado"
                        );
                    } else {
                        //echo "Error al intentar guardar la informacion";
                        $info[$i] = array(
                            "archivo" => $data['upload_data']['file_name'],
                            "mensaje" => "Archivo subido pero no guardado guardado"
                        );
                    }
                } else {
                    //echo $this->upload->display_errors();
                    $info[$i] = array(
                        "archivo" => $_FILES['archivo']['name'],
                        "mensaje" => "Archivo no subido ni guardado"
                    );
                }
            }
            //CONDICIÓN EN CASO DE QUE NO EXISTAN ERRORES EN LOS CAMPOS NI EN LA IMAGEN
            if (isset($datos)) {
                $categoria = $datos['categoria'];
                $subcategoria = $datos['subcategoria'];
                $estado = $datos['estado'];
                $municipio = $datos['municipio'];
                $titulo = $datos['titulo'];
                $descripcion = $datos['descripcion'];
                $precio = $datos['precio'];
                $nombre = $datos['nombre'];
                $telefono = $datos['telefono'];
                $email = $datos['email'];
                // ENVIA TODOS LOS DATOS RECIBIDOS DEL FORMULARIO A LA FUCIÓN INSERTANUNCIO DEL MODELO_ANUNCIO
                $this->Model_Anuncio->insertAnuncio($categoria, $subcategoria, $estado, $municipio, $titulo, $descripcion, $precio, $nombre, $telefono, $email,$img1);

                //MOSTRARA TODOS LOS VALORES DEL ARCHIVO SUBIDO 
//                $data = array('upload_data' => $this->upload->data());
                redirect('Control_Anuncio');
            }
        }
    }

    public function insert2() {

        //CARGO LA INFORMACION RECIBIDA POR POST, EN NUVA VARIABLE
        $datos = $this->input->post();
        //REALIZA LA VALIDACIÓN DE LOS CAMPOS
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');
        $this->form_validation->set_rules('subcategoria', 'Subcategoria', 'required');
        $this->form_validation->set_rules('estado', 'Estado', 'required');
        $this->form_validation->set_rules('municipio', 'Municipio', 'required');
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|trim|validatexto');
        $this->form_validation->set_rules('descripcion', 'Descripcion', 'required|trim|validatexto');
        $this->form_validation->set_rules('precio', 'Precio', 'required|numeric');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'trim|min_length[7]|max_length[10]|numeric');

//        //SE SELECCIONA LA RUTA EN DONDE SE CARGARAN LOS ARCHIVOS
//        $config['upload_path'] = './img/cargas/';
//        //ESPECIFICA LOS TIPOS DE ARCHIVOS PERMITIDOS
//        $config['allowed_types'] = 'gif|jpg|png';
//        //ESTABLECE LAS DIMENCIONES PREDETERMINAS PARA LOS ARCHIVOS
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
//        
//        $this->load->library("upload");
        $config = array(
            "upload_path" => "./img/cargas",
            'allowed_types' => "jpg|png"
        );
        $variablefile = $_FILES;
        $info = array();
        $files = count($_FILES['archivo']['name']);
        //CARGA LA LIBRERYA UPLOAD, Y ENVIO LOS DATOS DE CONFIGURACIÓN
        $this->load->library('upload', $config);



//        $this->form_validation->set_message('required', 'El campo  no posse un email valido');
        //MENSAJE PARA MOSTRAR ERRORES EN FORMULARIO
        $this->form_validation->set_error_delimiters('<div class="solid-green">', '</div>');

        //CONDICIONAL PARA VERIFICAR VALIDACION DEL FORMULARIO O SI HAN OCURRIDO ERRORES EN LA SELECCIÓN DE LA IMAGEN
        // 'imagen' ES EL NOMBRE ESTABLECIDO EN EL INPUT FILE
        $id = $this->tank_auth->get_user_id();
        $resultadoa = $this->Model_Anuncio->siguiente();
        foreach ($resultadoa as $sig) {
            $band = $sig->resul;
        }
        $data['siguiente'] = $band;

        if ($this->form_validation->run() === FALSE) {

            $data['selEstado'] = $this->Model_Anuncio->selEstado();
            $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
            
            $data['usuario'] = $this->Model_Categorias->buscausuario($id);
//            $cookies = $this->input->cookie('ebank_idusu_cookie');
//            $data['cook'] = $this->Model_Usuario->cook($cookies);
            $this->load->view('plantillas/back_end/header', $data);
            $this->load->view('plantillas/back_end/sidebar', $data);
            $this->load->view('back_end/Anunciate', $data);
            $this->load->view('plantillas/back_end/footer');
        } else {
            for ($i = 0; $i < $files; $i++) {
                $_FILES['archivo']['name'] = $variablefile['archivo']['name'][$i];
                $_FILES['archivo']['type'] = $variablefile['archivo']['type'][$i];
                $_FILES['archivo']['tmp_name'] = $variablefile['archivo']['tmp_name'][$i];
                $_FILES['archivo']['error'] = $variablefile['archivo']['error'][$i];
                $_FILES['archivo']['size'] = $variablefile['archivo']['size'][$i];
                $this->upload->initialize($config);

                if ($this->upload->do_upload('archivo')) {
                    $data = array("upload_data" => $this->upload->data());
                    $img = $data['upload_data']['file_name'];
                }else{
                    $img = NULL;
                }
            }

            //CONDICIÓN EN CASO DE QUE NO EXISTAN ERRORES EN LOS CAMPOS NI EN LA IMAGEN
            if (isset($datos)) {
                $categoria = $datos['categoria'];
                $subcategoria = $datos['subcategoria'];
                $estado = $datos['estado'];
                $municipio = $datos['municipio'];
                $titulo1 = $datos['titulo'];
                $titulo = ucfirst(strtolower($titulo1));
                $descripcion1 = $datos['descripcion'];
                $descripcion = ucfirst(strtolower($descripcion1));
                $precio = $datos['precio'];
                $telefono = $datos['telefono'];
                setlocale(LC_ALL,"es_ES");
                $fecha = utf8_encode(strftime("%A %d de %B del %Y"));

                // ENVIA TODOS LOS DATOS RECIBIDOS DEL FORMULARIO A LA FUCIÓN INSERTANUNCIO DEL MODELO_ANUNCIO
                $data['proc'] = $this->Model_Anuncio->insertAnuncioback($categoria, $subcategoria, $id, $estado, $municipio, $titulo, $descripcion, $precio, $telefono,$img,$fecha);


                $data['usuario'] = $this->Model_Categorias->buscausuario($id);
                $data['selEstado'] = $this->Model_Anuncio->selEstado();
                $data['selCategoria'] = $this->Model_Anuncio->selCategoria();

                $this->load->view('plantillas/back_end/header', $data);
                $this->load->view('plantillas/back_end/sidebar', $data);
                $this->load->view('back_end/Anunciate', $data);
                $this->load->view('plantillas/back_end/footer');
            }
        }

        for ($i = 0; $i < $files; $i++) {
            $_FILES['archivo']['name'] = $variablefile['archivo']['name'][$i];
            $_FILES['archivo']['type'] = $variablefile['archivo']['type'][$i];
            $_FILES['archivo']['tmp_name'] = $variablefile['archivo']['tmp_name'][$i];
            $_FILES['archivo']['error'] = $variablefile['archivo']['error'][$i];
            $_FILES['archivo']['size'] = $variablefile['archivo']['size'][$i];
            $this->upload->initialize($config);
            if ($this->upload->do_upload('archivo')) {
                $data = array("upload_data" => $this->upload->data());
                
                $datos2 = array(
                    "nom_img" => $data['upload_data']['file_name'],
                    "Id_anun" => $band,
                );
                if ($this->Model_Anuncio->guardar($datos2)) {
                    //echo "Registro guardado";
                    $info[$i] = array(
                        "archivo" => $data['upload_data']['file_name'],
                        "mensaje" => "Archivo subido y guardado"
                    );
                } else {
                    //echo "Error al intentar guardar la informacion";
                    $info[$i] = array(
                        "archivo" => $data['upload_data']['file_name'],
                        "mensaje" => "Archivo subido pero no guardado guardado"
                    );
                }
            } else {
                //echo $this->upload->display_errors();
                $info[$i] = array(
                    "archivo" => $_FILES['archivo']['name'],
                    "mensaje" => "Archivo no subido ni guardado"
                );
            }
        }
    }

}
