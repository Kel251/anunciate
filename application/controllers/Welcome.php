<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller{

	function __construct(){
		parent::__construct();

	}

	function index(){		
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			redirect('Control_Dashuser');
		}
	}

	function sistema(){
		
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();			
			$this->load->view('headers/librerias');
			$this->load->view('principal', $data);
			$this->load->view('footer');	# code...
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */