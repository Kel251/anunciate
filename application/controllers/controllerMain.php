<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controllerMain extends CI_Controller{
    //put your code here
    public function index(){
        $this->load->model('modelComboBoxes');
        $data['estados'] = $this->modelComboBoxes->getEstados();
        
        $this->load->view('viewComboBoxes', $data);
    }
}


