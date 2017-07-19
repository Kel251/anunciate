<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Control_Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
        // Carga la Comunicación con el modelo
        $this->load->model('Model_Usuario');
        $this->load->model('Model_Anuncio');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
    }

    public function index() {


        if ($this->tank_auth->is_logged_in()) {
            redirect('Control_Usuario/contenido');
        } else {
            redirect('Control_Usuario/landing');
        }
    }

    public function landing() {
        $this->load->view('plantillas/front_end/headerland');
        $this->load->view('plantillas/front_end/landing');
        if ($this->tank_auth->is_logged_in()) {
            redirect('Control_Usuario/contenido');
        }
    }

    public function contenido() {
//       
//        
        //if ($this->tank_auth->is_logged_in()) {
        //  redirect('/auth/login/');
        //} else {
        // }
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA USUARIO DEL MODELO USUARIO
        $data['selUsuario'] = $this->Model_Usuario->selUsuario();
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        $data['contenido'] = $this->Model_Usuario->contenido();
        $data['vehiculos'] = $this->Model_Usuario->vehiculos();
        $data['recientes'] = $this->Model_Usuario->recientes();
        $data['destacados'] = $this->Model_Usuario->destacados();
        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        //$this->load->view('plantillas/front_end/Sidebar');
//        //
//        //CARGA LA PLANTILLA CONTENIDO DINAMICO
        $this->load->view('plantillas/front_end/contenidodinamico', $data);
//        
//        //CARGA LA PLANTILLA FOOTER
        $this->load->view('plantillas/front_end/footer');
    }

    public function Vehiculos() {
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();
        $data['vehiculos'] = $this->Model_Usuario->vehiculos2();
        $data['vehiculos1'] = $this->Model_Usuario->vehiculos3();
        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Vehiculos', $data);
        $this->load->view('plantillas/front_end/footer');
    }

    public function Empleos() {
//        //REALIZA LA LLAMADA A LAS FUNCIONES DEL MODELO USUARIO PARA CARGAR EL CONTEDINO
        $data['emplesug'] = $this->Model_Usuario->emplesug();
        $data['empledest'] = $this->Model_Usuario->empledest();
        $data['emplereci'] = $this->Model_Usuario->emplereci();
        $data['masemple'] = $this->Model_Usuario->masemple();
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Empleos');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Ensenanza() {
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Ensenanza');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Fiestas() {
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Fiestas');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Servicios() {
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Servicios');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Hogar() {
        //        //REALIZA LA LLAMADA A LAS FUNCIONES DEL MODELO USUARIO PARA CARGAR EL CONTEDINO
        $data['hogarsug'] = $this->Model_Usuario->hogarsug();
        $data['hogardest'] = $this->Model_Usuario->hogardest();
        $data['hogarreci'] = $this->Model_Usuario->hogarreci();
        $data['mashogar'] = $this->Model_Usuario->mashogar();

//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Hogar');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Inmuebles() {
        //REALIZA LA LLAMADA A LAS FUNCIONES DEL MODELO USUARIO PARA CARGAR EL CONTEDINO
        $data['inmueblesug'] = $this->Model_Usuario->inmueblesug();
        $data['inmuebledest'] = $this->Model_Usuario->inmuebledest();
        $data['inmueblereci'] = $this->Model_Usuario->inmueblereci();
        $data['masinmueble'] = $this->Model_Usuario->masinmueble();

//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Inmuebles');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Construccion() {
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Construccion');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Informatica() {
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Informatica');
        $this->load->view('plantillas/front_end/footer');
    }

    public function Mascotas() {
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
        $this->load->model('Ciudades_model');
        $data['selEstado'] = $this->Ciudades_model->selEstados();

        //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
        $this->load->view('plantillas/front_end/header');

        //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
        $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
        $this->load->view('plantillas/front_end/sidebar', $data);
        $this->load->view('front_end/Mascotas');
        $this->load->view('plantillas/front_end/footer');
    }

////  FUNCIÓN QUE RECIBE LOS DATOS DEL FORMULARIO DE REGISTRO PARA USUARIOS
    public function insert() {

        $this->load->library('email');
//        $data = $this->input->post();       
//        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
//        $this->form_validation->set_rules('emailr', 'Email', 'required|valid_email');
//        $this->form_validation->set_rules('nombrer', 'Nombre', 'required|alpha');
//        $this->form_validation->set_rules('apellidor', 'Apellido', 'required|alpha');
//        $this->form_validation->set_rules('password1', 'Password', 'required');
//        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password1]');
//        $this->form_validation->set_error_delimiters('<div class="solid-green">', '</div>');
//        if ($this->form_validation->run() === FALSE) {
//
//            $data['selEstado'] = $this->Model_Anuncio->selEstado();
//            $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
//            //CARGA TODAS LAS VISTAS EN CASO DE QUE EXISTAN ERRORES
//            $this->load->view('plantillas/front_end/header');
//            $this->load->view('usuario/index');
//            $this->load->view('plantillas/front_end/sidebar', $data);
//            $this->load->view('front_end/Anuncio', $data);
//            $this->load->view('plantillas/front_end/footer');
//        } 
//        if (isset($data)) {
        //SSECURITY XSS CLEAN LIMPIA LOS DATOS, STRIP_TAGS ELIMINA ETIQUETAS
        $nickname = $this->security->xss_clean(strip_tags($this->input->post('nickname')));
        $email = $this->security->xss_clean(strip_tags($this->input->post('emailr')));
        $anunciante = $this->security->xss_clean(strip_tags($this->input->post('anunciante')));
        $nombre = $this->security->xss_clean(strip_tags($this->input->post('nombrer')));
        $apellido = $this->security->xss_clean(strip_tags($this->input->post('apellidor')));
        $password = md5($this->security->xss_clean(strip_tags($this->input->post('password1'))));

//            $nickname = $data['nickname'];
//            $email = $data['emailr'];
//            $anunciante = $data['anunciante'];
//            $nombre = $data['nombrer'];
//            $apellido = $data['apellidor'];
//            $password = $data['password1'];
//            $passworden = md5($password);
//            $nameuser['nameuser'] = $this->Model_Usuario->insertUsuario($nickname);
        //ENVÍA LOS DATOS RECIBIDOS DEL FORMULARIO A LA FUNCIÓN INSERTA USUARIO DEL MODELO USUARIO 
        $data = $this->Model_Usuario->insertUsuario($nickname, $email, $anunciante, $nombre, $apellido, $password);

        //CONDICIONES PARA VALIDAR LA DISPONIVILIDAD DE USUARIO Y CONTRASEÑA
        if ($data === 1) {
            echo 'Este usuario ya existe';
            $data = 1;
        } elseif ($data === 2) {
            $data = 2;
            echo 'Este correo ya existe';
        } else {

            //ENVÍA EL CORREO Y CONTRASEÑA PARA CREAR EL INCIO DE SESSION EN DADO CASO DE QUE EL USUARIO Y CORREO ESTEN DISPONIBLES
            $resp = $this->Model_Usuario->login($email, $password);
            if ($resp) {

                $data = [
                    "id" => $resp->Id_user,
                    "name" => $resp->Nickname,
                    "imagen" => $resp->Foto_perfil,
                    "login" => TRUE
                ];

                $this->session->set_userdata($data);
            }
            //$destinatario = $email;
            //$asunto = 'Cuenta Anunciate';
            //$mensaje = $nombre.' '.$apellido .' Hola bienvenido te has registrado a anunciate!';
            //$this->email->from('al22140734@gmail.com','anunciate!');
            //$this->email->to($destinatario);
            //$this->email->subject($asunto);
//                $this->email->message($mensaje);
            //              $this->email->send();
            echo 'Ya estas registrado';
        }

//            $data['selEstado'] = $this->Model_Anuncio->selEstado();
//            $data['selCategoria'] = $this->Model_Anuncio->selCategoria();
        //CARGA TODAS LAS VISTAS EN CASO DE QUE EXISTAN ERRORES
//            $this->load->view('plantillas/front_end/header');
//            $this->load->view('usuario/index',$data);
//            $this->load->view('plantillas/front_end/sidebar', $data);
//            $this->load->view('front_end/Anuncio', $data);
//            $this->load->view('plantillas/front_end/footer');
//        }
    }

    function ingresar() {

        //SSECURITY XSS CLEAN LIMPIA LOS DATOS, STRIP_TAGS ELIMINA ETIQUETAS
        $email = $this->security->xss_clean(strip_tags($this->input->post("email")));
        $password = md5($this->security->xss_clean(strip_tags($this->input->post("password"))));
        $resp = $this->Model_Usuario->login($email, $password);
        if ($resp) {
            $data = [
                "id" => $resp->Id_user,
                "name" => $resp->Nickname,
                "imagen" => $resp->Foto_perfil,
                "login" => TRUE
            ];

            $this->session->set_userdata($data);
        } else {
            echo "error";
        }
    }

    function cerrar() {
        $this->session->sess_destroy();
    }

    function login() {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        } else {
            redirect('Control_Dashuser');
        }
    }

    public function reset_pass() {
        $data['respuesta'] = "Se ha enviado un correo electrónico con las instrucciones para crear una nueva contraseña.";
        $this->load->view('auth/forgot_password_form', $data);
    }

    public function successful() {
        $data['successful'] = "Se ha enviado un correo electrónico con las instrucciones para crear una nueva contraseña.";
        $this->load->view('auth/register_form', $data);
    }

    ///CARGA LAS IMAGENES RELACIONADAS CON EL ANUNCIO
    public function showpictures() {
        if ($this->input->is_ajax_request()) {
            $idsele = $this->input->post("id");
            $datos = $this->Model_Usuario->buscafotos($idsele);

            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    public function filtroubicacion() {
        $estado = $this->input->post('estado');
        $municipios = $this->input->post('municipios');

        if ($this->Model_Usuario->buscarubicacion($estado, $municipios)) {
            $data['ubicacion'] = $this->Model_Usuario->buscarubicacion($estado, $municipios);
            $data['selUsuario'] = $this->Model_Usuario->selUsuario();
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
            $this->load->model('Ciudades_model');
            $data['selEstado'] = $this->Ciudades_model->selEstados();

            $data['contenido'] = $this->Model_Usuario->contenido();
            //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
            $this->load->view('plantillas/front_end/header');

            //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
            $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
            $this->load->view('plantillas/front_end/sidebar', $data);
            //$this->load->view('plantillas/front_end/Sidebar');
//        //
//        //CARGA LA PLANTILLA CONTENIDO DINAMICO
            $this->load->view('front_end/Ubicacion', $data);
//        
//        //CARGA LA PLANTILLA FOOTER
            $this->load->view('plantillas/front_end/footer');
        } else {
            echo '<script type="text/javascript">
            alert("No se encontraron anuncios en este lugar.");
            window.location.href = "http://anunciat.esy.es/anunciatec2/Control_Usuario";
         </script>';
        }
    }

    ///CARGA LA INFORMACIOÓN RELACIONADA CON EL ANUNCIO
    public function showinfo() {
        if ($this->input->is_ajax_request()) {
            $idsele = $this->input->post("id");
            $datos = $this->Model_Usuario->buscainfo($idsele);

            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    public function perfilanunciante($id = NULL, $pagina = FALSE) {
        if ($id != NULL) {
            $inicio = 0;
            $limite = 4;
            if ($pagina) {
                $inicio = ($pagina - 1) * $limite;
            }

            $data['anuncio'] = $this->Model_Usuario->anuncios($id, $inicio, $limite);
            $this->load->library('pagination');

            $config['base_url'] = base_url() . 'Control_Usuario/perfilanunciante/' . $id . '/';
            $config['total_rows'] = count($this->Model_Usuario->anuncios($id));
            $config['per_page'] = $limite;
            $config['uri_segment'] = 4;
            $config['first_url'] = base_url() . 'Control_Usuario/perfilanunciante/' . $id;
            $config['full_tag_open'] = '<ul class="paginador">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = '&lsaquo;&lsaquo; Primero';
            $config['last_link'] = 'Ultimo &rsaquo;&rsaquo;';
            $config['next_link'] = 'Siguiente &gt;';
            $config['prev_link'] = '&lt; Anterior';
            $config['first_tag_open'] = '<li>';
            $config['last_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['prev_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li>';
            $config['cur_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';


            $this->pagination->initialize($config);

            $data['user'] = $this->Model_Usuario->infoanunciante($id);

            //header('Content-Type: text/xml');
            ///Condicion para mostrar el mapa de ubicacion Ciontrolador el $id lo tomas de valor de tu usuario al ver su perfil
            echo '<markers>';
            $sql = $this->db->query("SELECT * FROM reg WHERE idu = $id");
            foreach ($sql->result_array() as $row) {
                if($row != ""){
                    echo "<marker id ='" . $row['Id'] . "' lat='" . $row['Lat'] . "' lng='" . $row['Lng'] . "'>\n";
                echo "</marker>\n";
                $data['latitud'] = $row['Lat'];
            $data['lon'] = $row['Lng'];
                }
                
            }

            //$data['anuncio'] = $this->Model_Usuario->anuncios($id);

            $this->load->view('plantillas/front_end/header');
            $this->load->view('usuario/index');
            //$this->load->view('plantillas/front_end/sidebar',$data);
            //$this->load->view('front_end/Ensenanza');
            $this->load->view('front_end/Perfil_User', $data);
            $this->load->view('plantillas/front_end/footer');
        } else {
            echo '<script type="text/javascript">
            alert("A ocurrido un error al cargar el perfil intenta más tarde.");
            window.location.href = "http://anunciat.esy.es/anunciatec2/Control_Usuario/";
         </script>';
        }
    }

// BUSCAR ANUNCIOS POR CRITERIO
    public function buscar() {
        $criterio = $this->input->post('criterio');
        if ($criterio === "") {
            redirect('Control_Usuario/contenido');
        } elseif ($this->Model_Usuario->buscar($criterio)) {
            $data['busqueda'] = $this->Model_Usuario->buscar($criterio);
//        
//        //REALIZA LA LLAMADA A LA FUNCION SELECCIÓNA ESTADOS DEL MODELO CIUDADES
            $this->load->model('Ciudades_model');
            $data['selEstado'] = $this->Ciudades_model->selEstados();
            //$this->load->view('viewComboBoxes', $data);
//        
//        //CARGA LA PLANTILLA HEADER
            $this->load->view('plantillas/front_end/header');

            //CARGA VISTA DEL MODAL PARA REGISTRO DE USUARIO
            $this->load->view('usuario/index');
//        
//        //CARGA LA PLANTILLA SIDEBAR
            $this->load->view('plantillas/front_end/sidebar', $data);
            //$this->load->view('plantillas/front_end/Sidebar');
//        //
//        //CARGA LA PLANTILLA CONTENIDO DINAMICO
            $this->load->view('front_end/Buscar', $data);
//        
//        //CARGA LA PLANTILLA FOOTER
            $this->load->view('plantillas/front_end/footer');
        } else {
            echo '<script type="text/javascript">
            alert("No se encontraron anuncios con la busqueda solicitada");
            window.location.href = "http://anunciat.esy.es/anunciatec2/Control_Usuario";
         </script>';
        }
    }

    //ACERCA LANDINGPAGE
    public function acerca() {
        $this->load->view('plantillas/front_end/headerland');
        $this->load->view('front_end/Acerca');
    }

    ///CARGA LOS COMENTARIOS DEL ANUNCIO
    public function showcomentarios() {
        if ($this->input->is_ajax_request()) {
            $idsele = $this->input->post("id");
            $datos = $this->Model_Usuario->mostrarComentarios($idsele);

            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    ///INSERTA UN NUEVO COMENTARIO
    public function postcomentario() {
        $id = $this->tank_auth->get_user_id();
        if ($this->input->is_ajax_request()) {
            $comentario = $this->input->post('comentario');
            $id_anun = $this->input->post('idanuncio');
            if ($this->Model_Usuario->postcomment($comentario, $id_anun, $id)) {
                //echo "bien!";
                $id_anun = FALSE;
                return TRUE;
            } else {
                echo "Tienes que iniciar sesion o registrarte para poder comentar.";
                $id_anun = FALSE;
                return FALSE;
            }
        }
    }
    
    public function follow() {
        $id = $this->tank_auth->get_user_id();
        if ($this->input->is_ajax_request()) {
            $comentario = $this->input->post('comentario');
            $id_anun = $this->input->post('idanuncio');
            if ($this->Model_Usuario->postcomment($comentario, $id_anun, $id)) {
                //echo "bien!";
                $id_anun = FALSE;
                return TRUE;
            } else {
                echo "Tienes que iniciar sesion o registrarte para poder comentar.";
                $id_anun = FALSE;
                return FALSE;
            }
        }
    }

    //marcadores
    public function markers() {
        header('Content-Type: text/xml');
        echo '<markers>';
        include ("conexion.php");
        $sql = $this->db->query("select * from reg ORDER BY Id");
        while ($row = mysqli_fetch_array($sql)) {
            echo "<marker id ='" . $row['Id'] . "' lat='" . $row['Lat'] . "' lng='" . $row['Lng'] . "'>\n";
            echo "</marker>\n";
        }
        mysql_close($bd);
        echo "</markers>\n";
    }

}
