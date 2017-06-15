<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sistema extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->tank_auth->get_user_id()) {
            redirect(base_url());
        }
	}

	function index(){		
		$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();			
			$this->load->view('headers/librerias');
			$this->load->view('principal', $data);
			$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */