<?php
class controllerComboBoxes extends CI_Controller{
    //put your code here    
    public function fillCiudades() {
        $idEstado = $this->input->post('idEstado');
        
        if($idEstado){
            $this->load->model('modelComboBoxes');
            $ciudades = $this->modelComboBoxes->getCiudades($idEstado);
            echo '<option value="0">Ciudades</option>';
            foreach($ciudades as $fila){
                echo '<option value="'. $fila->idCiudad .'">'. $fila->nombreCiudad .'</option>';
            }
        }  else {
            echo '<option value="0">Ciudades</option>';
        }
    }
    
    public function hacerAlgo() {
        $idEstado = $this->input->post('idEstado');
        $idCiudad = $this->input->post('idCiudad');
        
        echo 'idEstado = '. $idEstado. '; idCiudad = '. $idCiudad;
    }
}
