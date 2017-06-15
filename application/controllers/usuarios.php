<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Usuarios_model');
	}

	public function index(){
		$this->load->view('frontend/usuarios');
	}

	public function guardar(){
		if ($this->input->is_ajax_request()) {
			//$file = $_FILES['photo_user']['name'];
			//echo json_encode($file);
			
			/*$config['upload_path'] = "./assets/images/uploads/";
			$config['allowed_types'] = "jpg";

			$this->load->library("upload", $config);

			if (!$this->upload->do_upload('photo_user')) {
				echo json_encode($this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				echo $data['upload_data']['file_name'];
			}*/
			//----- comienza el ingreso
			$email = $this->input->post("email");
			$nombres = $this->input->post("nombres");
			$apellidos = $this->input->post("apellidos");
			$password = $this->input->post("password");
			
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('nombres', 'Nombres', 'required');
			$this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');

			if ($this->form_validation->run() == TRUE) {
										
					$config['upload_path'] = "./assets/images/uploads/";
					$config['allowed_types'] = "jpg";

					$this->load->library("upload", $config);

					if (!$this->upload->do_upload('photo_user')) {
						//echo $this->upload->display_errors();
						if (!empty($_FILES['photo_user']['name'])) {
					        // Name isn't empty so a file must have been selected
					        //$error = array('error' => $this->upload->display_errors());
					        //$this->load->view('upload_success', $error);
					        echo $this->upload->display_errors();
					    } else {
					        // No file selected - set default image
					        $data = [
								"nombres" => $nombres,
								"apellidos" => $apellidos,
								"email" => $email, 
								"password" => sha1($password),
								"photo" => "default.jpg",
							];

							if ($this->Usuarios_model->guardar($data) == true) {
								echo "Exito";
							}
							else{
								echo "Error";
							}
					    }
					}
					else
					{
						$data = array('upload_data' => $this->upload->data());
						
						$datos = [
							"nombres" => $nombres,
							"apellidos" => $apellidos,
							"email" => $email, 
							"password" => sha1($password),
							"photo" => $data['upload_data']['file_name'],
						];

						if ($this->Usuarios_model->guardar($datos) == true) {
							echo "Exito";
						}
						else{
							echo "Error";
						}
					}
				
				
				
				
			}
			else{
				echo validation_errors("<li>","</li>");
			}

			
		}
		else{
			show_404();		
		}

			
	}

	function mostrar(){
		if ($this->input->is_ajax_request()) {
			$buscar = $this->input->post("buscar");
			$datos = $this->Usuarios_model->mostrar($buscar);
			echo json_encode($datos);
			
		}
		else
		{
			show_404();
		}
	}
}