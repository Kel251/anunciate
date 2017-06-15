<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Control_Empleados extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Model_Empleados");
        
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
    }

    

    function guardar() {
        //El metodo is_ajax_request() de la libreria input permite verificar
        //si se esta accediendo mediante el metodo AJAX 
        if ($this->input->is_ajax_request()) {
            $nombres = $this->input->post("nombres");
            $apellidos = $this->input->post("apellidos");
            $dni = $this->input->post("dni");
            $telefono = $this->input->post("telefono");
            $email = $this->input->post("email");

            $this->form_validation->set_rules('nombres', 'Nombres', 'required');
            $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
            $this->form_validation->set_rules('dni', 'DNI', 'required');
            $this->form_validation->set_rules('telefono', 'Telefono', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');



            if ($this->form_validation->run() === TRUE) {

                $config = [
                    "upload_path" => "./assets/images/uploads",
                    'allowed_types' => "png|jpg"
                ];

                $this->load->library("upload", $config);

                if ($this->upload->do_upload('foto_empleado')) {
                    $data = array("upload_data" => $this->upload->data());
                    $datos = array(
                        "nombres_empleado" => $nombres,
                        "apellidos_empleado" => $apellidos,
                        "dni_empleado" => $dni,
                        "telefono_empleado" => $telefono,
                        "email_empleado" => $email,
                        "foto_empleado" => $data['upload_data']['file_name'],
                        "id_usuario" => $this->session->userdata('id')
                    );
                    if ($this->Model_Empleados->guardar($datos) == true)
                        echo "exito";
                    else
                        echo "error";
                }
                else {
                    echo $this->upload->display_errors();
                }
            } else {
                echo validation_errors('<li>', '</li>');
            }
        } else {
            show_404();
        }
    }

    function mostrar() {
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post("buscar");
            $datos = $this->Model_Empleados->mostrar($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    function mostrarAnuncios() {
        
        if ($this->input->is_ajax_request()) {
            $buscar = $this->input->post("buscar");
            $datos = $this->Model_Empleados->mostrarAnuncio($buscar);
            echo json_encode($datos);
        } else {
            show_404();
        }
    }

    function actualizar() {
        if ($this->input->is_ajax_request()) {

            $idsele = $this->input->post("idsele");
            $nombres = $this->input->post("nombressele");
            $apellidos = $this->input->post("apellidossele");
            $dni = $this->input->post("dnisele");
            $telefono = $this->input->post("telefonosele");
            $email = $this->input->post("emailsele");

            $config = [
                "upload_path" => "./img/cargas",
                'allowed_types' => "png|jpg"
            ];

            $this->load->library("upload", $config);

            if ($this->upload->do_upload('foto_nueva')) {
                $registro = $this->Model_Empleados->capturarImagen($idsele);
                unlink("./img/cargas/" . $registro->foto_empleado);
                $data = array("upload_data" => $this->upload->data());
                $datos = array(
                    "nombres_empleado" => $nombres,
                    "apellidos_empleado" => $apellidos,
                    "dni_empleado" => $dni,
                    "telefono_empleado" => $telefono,
                    "email_empleado" => $email,
                    "foto_empleado" => $data['upload_data']['file_name']
                );

                if ($this->Model_Empleados->actualizar($idsele, $datos) == true) {
                    echo "Registro Actualizado";
                } else {
                    echo "No se pudo actualizar los datos";
                }
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            show_404();
        }
    }

    function eliminar() {
        if ($this->input->is_ajax_request()) {
            $idsele = $this->input->post("id");
            $registro = $this->Model_Empleados->capturarImagen($idsele);
            unlink("./assets/images/uploads/" . $registro->foto_empleado);
            if ($this->Model_Empleados->eliminar($idsele) == true)
                echo "Registro Eliminado";
            else
                echo "No se pudo eliminar los datos";
        }
        else {
            show_404();
        }
    }

    function eliminar2() {
        if ($this->input->is_ajax_request()) {
            $idsele = $this->input->post("id");
            $registro = $this->Model_Empleados->capturarImagen2($idsele);
            unlink("./img/cargas/" . $registro->archivo);
            if ($this->Model_Empleados->eliminar2($idsele) == true)
                echo "Registro Eliminado";
            else
                echo "No se pudo eliminar los datos";
        }
        else {
            show_404();
        }
    }

    function actualizar2() {
        if ($this->input->is_ajax_request()) {

            $idsele = $this->input->post("idsele");
            $nombres = $this->input->post("nombressele");
            $apellidos = $this->input->post("apellidossele");
//          $dni = $this->input->post("dnisele");
            $telefono = $this->input->post("telefonosele");
            //$email = $this->input->post("emailsele");
            $estado = $this->input->post("estado");
            $municipio = $this->input->post("municipio");
            $categoria = $this->input->post("categoria");
            $subcategoria = $this->input->post("subcategoria");
            $precio = $this->input->post("precio");

            $config = [
                "upload_path" => "./img/cargas",
                'allowed_types' => "png|jpg"
            ];

            $this->load->library("upload", $config);

            if ($this->upload->do_upload('foto_nueva')) {
                $registro = $this->Model_Empleados->capturarImagen2($idsele);
                //$mail = $email;
                unlink("./img/cargas/" . $registro->archivo);
                $data = array("upload_data" => $this->upload->data());

                if ($estado != 0 && $categoria == 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_est" => $estado,
                        "Id_mun" => $municipio,
                        "telefono" => $telefono,
                        "precio" => $precio,
              //          "email" => $email,
                        "archivo" => $data['upload_data']['file_name']
                    );
                }
                if ($estado == 0 && $categoria != 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_cat" => $categoria,
                        "Id_subcat" => $subcategoria,
                        "telefono" => $telefono,
                        "precio" => $precio,
                //        "email" => $email,
                        "archivo" => $data['upload_data']['file_name']
                    );
                }
                if ($estado != 0 && $categoria != 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_cat" => $categoria,
                        "Id_subcat" => $subcategoria,
                        "Id_est" => $estado,
                        "Id_mun" => $municipio,
                        "telefono" => $telefono,
                        "precio" => $precio,
                  //      "email" => $email,
                        "archivo" => $data['upload_data']['file_name']
                    );
                }
                if ($estado == 0 && $categoria == 0){
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "telefono" => $telefono,
                        "precio" => $precio,
                    //    "email" => $email,
                        "archivo" => $data['upload_data']['file_name']
                    );
                }
                if ($this->Model_Empleados->actualizar2($idsele, $datos) == true) {
                    echo "Registro Actualizado";
                    echo $estado;
                    echo $municipio;
                } else {
                    echo "No se pudo actualizar los datos";
                }
            } else {

                if ($estado != 0 && $categoria == 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_est" => $estado,
                        "Id_mun" => $municipio,
                        "telefono" => $telefono,
                        "precio" => $precio,
                    );
                }
                if ($estado == 0 && $categoria != 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_cat" => $categoria,
                        "Id_subcat" => $subcategoria,
                        "telefono" => $telefono,
                        "precio" => $precio,
                    );
                }
                if ($estado != 0 && $categoria != 0) {
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "Id_cat" => $categoria,
                        "Id_subcat" => $subcategoria,
                        "Id_est" => $estado,
                        "Id_mun" => $municipio,
                        "telefono" => $telefono,
                        "precio" => $precio,
                    );
                }
                if ($estado == 0 && $categoria == 0){
                    $datos = array(
                        "Anuncio" => $nombres,
                        "Descripcion" => $apellidos,
                        "telefono" => $telefono,
                        "precio" => $precio,
                    );
                }


                if ($this->Model_Empleados->actualizar2($idsele, $datos) == true) {
                    echo "Registro Actualizado";
                    echo $estado;
                    echo $municipio;
                } else {
                    echo "No se pudo actualizar los datos";
                }
            }
        } else {
            show_404();
        }
    }

}
