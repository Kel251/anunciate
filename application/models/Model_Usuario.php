<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Model_Usuario extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Funcion de Select * en sql

    public function selUsuario() {
        $query = $this->db->query('Select * from cat_tipouser');
        //Retorna todos los registros de la tabla Usuarios
        return $query->result();
    }

    //FUNCIÓN PARA INSERTAR USUARIO
    public function insertUsuario($nickname, $email, $anunciante, $nombre, $apellido, $password) {

        $this->db->where('Nickname', $nickname);
        $rsultado = $this->db->get('cat_usuarios');
//        $consulta = $this->db->query("SELECT * FROM cat_usuarios WHERE Nickname = '$nickname' OR Email_user ='$email'");

        if ($rsultado->num_rows() > 0) {
            $nameuser1 = 'error1';
            return 1;
        } else {
            $this->db->where('Email_user', $email);
            $rsultado2 = $this->db->get('cat_usuarios');

            if ($rsultado2->num_rows() > 0) {
                $nameuser2 = 'error2';
                return 2;
            } else {
                $arrayDatosUser = array(
                    'nickname' => $nickname,
                    'email_user' => $email,
                    'tipo_user' => $anunciante,
                    'nom_user' => $nombre,
                    'app_user' => $apellido,
                    'passwordu' => $password,
                );

                $this->db->insert('cat_usuarios', $arrayDatosUser);
            }
        }
    }

    public function updateUser($acerca, $telefono, $nickname, $email, $anunciante, $website, $nombre, $social, $apellido, $data) {
        $id = $this->tank_auth->get_user_id();
        $query = $this->db->query("SELECT updateUsercFoto ('$id','$acerca', '$telefono','$nickname','$email','$anunciante','$website','$nombre','$social','$apellido','$data') AS resultado;");
        $query2 = $this->db->query("SELECT @result AS resultado");

        return $query2->result();
    }

    public function updateUsersf($acerca, $telefono, $nickname, $email, $anunciante, $website, $nombre, $social, $apellido) {
        $id = $this->tank_auth->get_user_id();
        $query = $this->db->query("SELECT updateusersfoto ('$id','$acerca','$telefono','$nickname','$email','$anunciante','$website','$nombre','$social','$apellido') AS resultado;");
        $query2 = $this->db->query("SELECT @result AS resultado");

        return $query2->result();
    }

    public function check_email($email, $id) {
//        $this->db->where('Email_user', $email);
        $consulta = $this->db->query("SELECT * FROM users WHERE email = '$email' AND id <> '$id'");
//        $consulta = $this->db->query("SELECT COUNT(*) FROM cat_usuarios WHERE Email_user = '$email' AND Id_user <> $id;");
//        $consulta = $this->db->get('cat_usuarios');
        if ($consulta->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check_nickname($nickname, $id) {
//        $this->db->where('Nickname', $nickname);
//         $consulta = $this->db->get('cat_usuarios');  
        $consulta = $this->db->query("SELECT * FROM users WHERE username = '$nickname' AND id <> '$id'");

        if ($consulta->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // FUNCIÓN PARA LOGEO
//    public function login($usuario, $password) {
//        $this->db->where('Nickname',$usuario)
//        ->where('Password',$password)
//        ->from('cat_usuarios');
//        $consulta = $this->db->get();
//        
//        if ($consulta->num_rows > 0){
//            $consulta = $consulta->row();
//            $this->session->set_userdata('login', $consulta->Nickname);
//            $this->session->set_userdata('email', $consulta->Email_user);            
//        }  else {
//            $this->session->set_flashdata('mensaje','El usuario o contraseña es incorrecto');
//        }
//    }

    function login($email, $password) {
        $this->db->where("email_user", $email);
        $this->db->where("passwordu", $password);
        $resultados = $this->db->get("cat_usuarios");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }
    }

    public function capturarImagen($id) {
        $this->db->select("Foto_perfil");
        $this->db->where("Id_user", $id);
        $this->db->from("cat_usuarios");
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function cook($cookie) {
        $this->db->where('Id_user', $cookie);
        $consulta = $this->db->get('cat_usuarios');
        return $consulta->result();
    }

    //ACTUALIZAR FOTO DE PORTADA
    public function updatefoto($id, $data) {
        $arrayDatosUser = array(
            'Foto_portada' => $data,
        );
        $this->db->where('id', $id);
        $this->db->update('users', $arrayDatosUser);
    }

    //CARGAR CONTENIDO PRINCIPAL
    public function contenido() {
        $this->db->select('*')
                ->from('det_anuncios')
                ->order_by('id_anun', 'ASC')
                ->limit(20);

//            $this->db->select('di.`Nom_img` AS img, da.`Fecha`, da.`Descripcion` AS descri, da.`Anuncio` AS titulo, da.`Id_anun` AS idanun, da.`precio` AS costo');
//            $this->db->from('det_imagenes AS di, det_anuncios AS da');
//            $this->db->where('di.`Id_anun` = da.`Id_anun`');
//            //$this->db->like('da.`Descripcion`', $valor);
//            $this->db->order_by('da.`Fecha`', 'DESC');
        //$this->db->limit('20', '0');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
    //CARGAR ANUNCIOS DE VEHIUCLOS EN LA SECCIÓN DEL CONTENIDO PRINCIPAL
    public function vehiculos() {
        $query = $this->db->query("SELECT * FROM det_anuncios AS da
        INNER JOIN cat_categorias AS cca ON (da.`Id_cat` = cca.`Id_cat`) AND cca.`Nom_cat` = 'Vehículos' ORDER BY id_anun ASC LIMIT 20");
        return $query->result();
    }
    //CARGAR ANUNCIOS DE VEHICULOS EN LA SECCIÓN DE VEHICULOS
    public function vehiculos2() {
        $query = $this->db->query("SELECT * FROM det_anuncios AS da
        INNER JOIN cat_categorias AS cca ON (da.`Id_cat` = cca.`Id_cat`) AND cca.`Nom_cat` = 'Vehículos' limit 0,10");
        return $query->result();
    }
    //CARGAR ANUNCIOS DE VEHICULOS EN LA SECCIÓN DE VEHICULOS
    public function vehiculos3() {
        $query = $this->db->query("SELECT * FROM det_anuncios AS da
        INNER JOIN cat_categorias AS cca ON (da.`Id_cat` = cca.`Id_cat`) AND cca.`Nom_cat` = 'Vehículos' limit 10,10");
        return $query->result();
    }
    //CARGAR ANUNCIOS RECIENTES EN LA SECCIÓN DEL CONTENIDO PRINCIPAL
    public function recientes() {
        $query = $this->db->query("SELECT * FROM det_anuncios ORDER BY `Fecha` ASC LIMIT 20");
        return $query->result();
    }
    //CARGAR ANUNCIOS DESTACADOS EN LA SECCIÓN DEL CONTENIDO PRINCIPAL
    public function destacados(){
        $query = $this->db->query("SELECT da.`Id_anun`, da.`Anuncio`, da.`archivo`, da.`precio`, COUNT(dco.`Id_coment`) AS 'comentarios'
                FROM det_anuncios AS da
                INNER JOIN det_comentarios AS dco ON dco.`id_anun` = da.`Id_anun`
                GROUP BY da.`Id_anun`
                ORDER BY comentarios DESC LIMIT 20");
        return $query->result();
    }
    
    //FUNCIONES PARA CARGAR ANUNCIOS EN LA SECCIÓN DE INMUEBLES
    //CARGAR ANUNCIOS SUGERIDOS EN LA SECCIÓN DE INMUEBLES
    public function inmueblesug(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 7 LIMIT 0, 10");
        return $query->result();
    }
    //CARGAR ANUNCIOS DESTACADOS EN LA SECCIÓN DE INMUEBLES
    public function inmuebledest(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 7 LIMIT 10, 10");
        return $query->result();
    }   
    //CARGAR ANUNCIOS RECIENTES EN LA SECCIÓN DE INMUEBLES
    public function inmueblereci(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 7 LIMIT 20, 10");
        return $query->result();
    }  
    //CARGAR ANUNCIOS MÁS EN LA SECCIÓN DE INMUEBLES
    public function masinmueble(){
        $query = $this->db->query(" SELECT * FROM det_anuncios WHERE id_cat = 7 LIMIT 30, 20");
        return $query->result();
    }    
    
    
    //FUNCIONES PARA CARGAR ANUNCIOS EN LA SECCIÓN DE EMPLEOS
    //CARGAR ANUNCIOS SUGERIDOS 
    public function emplesug(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 2 LIMIT 0, 10");
        return $query->result();
    }
    //CARGAR ANUNCIOS DESTACADOS
    public function empledest(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 2 LIMIT 10, 10");
        return $query->result();
    }   
    //CARGAR ANUNCIOS RECIENTES 
    public function emplereci(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 2 LIMIT 20, 10");
        return $query->result();
    }  
    //CARGAR ANUNCIOS MÁS 
    public function masemple(){
        $query = $this->db->query(" SELECT * FROM det_anuncios WHERE id_cat = 2 LIMIT 30, 20");
        return $query->result();
    }    
    
    
    //FUNCIONES PARA CARGAR ANUNCIOS EN LA SECCIÓN DE HOGAR
    //CARGAR ANUNCIOS SUGERIDOS 
    public function hogarsug(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 6 LIMIT 0, 10");
        return $query->result();
    }
    //CARGAR ANUNCIOS DESTACADOS
    public function hogardest(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 6 LIMIT 10, 10");
        return $query->result();
    }   
    //CARGAR ANUNCIOS RECIENTES 
    public function hogarreci(){
        $query = $this->db->query("SELECT * FROM det_anuncios WHERE id_cat = 6 LIMIT 20, 10");
        return $query->result();
    }  
    //CARGAR ANUNCIOS MÁS 
    public function mashogar(){
        $query = $this->db->query(" SELECT * FROM det_anuncios WHERE id_cat = 6 LIMIT 30, 20");
        return $query->result();
    }    

    //BUSCAR FOTOS PARA GALERIA RESPECTIVA A ANUNCIO
    public function buscafotos($id) {
        $this->db->select('i.nom_img AS img');
        $this->db->from('det_imagenes AS i, det_anuncios AS a');
        $this->db->where('I.id_anun = a.`Id_anun`');
        $this->db->where("a.`Id_anun`", $id);

        $resultado = $this->db->get();
        return $resultado->result();
    }

    /// FILTRAR CONTENIDO POR UBICACIÓN
    public function buscarubicacion($estado, $municipio) {
        $this->db->select('*')
                ->from('det_anuncios AS a, cat_estados AS e, cat_municipios AS m')
                ->where('e.`Id_est` = a.`Id_est`')
                ->where('m.`Id_est` = e.`Id_est`')
                ->where('m.`Id_mun` = a.`Id_mun`')
                ->where('a.`Id_est`', $estado)
                ->where('a.`Id_mun`', $municipio);
        $resultado = $this->db->get();
        return $resultado->result();
    }

    //BUSCA INFORMACIÓN RELACIÓNADA CON EL ANUNCIO
    public function buscainfo($id) {
        $this->db->select('u.`Foto_perfil` AS foto, u.`username` AS nickname, a.`Descripcion` AS descripcion, a.`Fecha` AS fecha,a.`precio` AS precio, a.`Anuncio` AS anuncio, u.`id` AS usuario');
        $this->db->from('det_anuncios AS a, users AS u');
        $this->db->where('a.`id` = u.`id`');
        $this->db->where("`Id_anun`", $id);

        $resultado = $this->db->get();
        return $resultado->result();
    }

    //CARGA INFORMACIÓN SOBRE EL PERFIL DEL ANUNCIANTE
    public function infoanunciante($id) {
        $this->db->select('*')
                ->from('users')
                ->where('id', $id);
        $resultado = $this->db->get();
        return $resultado->result();
    }

    //BUSCA LOS ANUNCIOS RELACIONADOS CON EL ANUNCIANTE
    public function anuncios($id, $inicio = FALSE, $limite = FALSE) {

        $this->db->order_by("Anuncio", 'desc');
        if ($inicio !== FALSE && $limite !== FALSE) {
            $this->db->limit($limite, $inicio);
        }

        $this->db->where('id', $id);
        $consulta = $this->db->get("det_anuncios");
//        $consulta = $this->db->get();
        return $consulta->result();
    }

    //CONSULTA PARA BUSCAR POR CRITERIO
    public function buscar($criterio) {
        $this->db->select('*')
                ->from('det_anuncios')
                ->like("Anuncio", $criterio)
                ->or_like('Descripcion', $criterio);
        $resultado = $this->db->get();
        return $resultado->result();
    }

    // BUSCA LOS COMENTARIOS RELACIONADAS CON LOS ANUNCIOS
    public function mostrarComentarios($id) {
        $this->db->select('c.Comentario AS coment, u.username AS nickname, u.Foto_perfil AS fotop');
        $this->db->from('det_comentarios AS c, det_anuncios AS a, users AS u');
        $this->db->where('c.Id_anun = a.`Id_anun`');
        $this->db->where('c.id = u.`id`');
        $this->db->where("c.`Id_anun`", $id);

        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function postcomment($comentario, $id_anun, $id = NULL) {
        if ($id != NULL) {
            $datos = array(
                'Comentario' => $comentario,
                'id' => $id,
                'id_anun' => $id_anun
            );
            if ($this->db->insert('det_comentarios', $datos)) {
                return TRUE;
            }
        }else{
            return FALSE;
        }
    }
    
//lo de marcadores en el controlador
    /// esto va en el Modelo 
    public function cargar($lat,$lng,$id){
        if($lat != NULL){
            $pos=$lat.",".$lng;
            
            $consulta = $this->db->query("CALL ubicacion1 ('$lat','$lng','$pos','$id',@result);");
        $resultadoalta = $this->db->query("SELECT @result AS resultado");
        return $resultadoalta->result();
        
            
        }
    } 

}
