<?php

//if (!defined('BASEPATH')) exit('No direct script access allowed');

class Control_Ciudades extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Ciudades_model');
        
    }

   
    public function llena_municipios() {
//        $options = "";
        $idestadorecibido = $this->input->post('idestado');
        
        if ($idestadorecibido) {

            $municipios = $this->Ciudades_model->selMunicipios($idestadorecibido);
//            echo '<option value="0">Municipios</option>';
            foreach ($municipios as $fila) {
                ?>
                <option value="<?= $fila->Id_mun ?>"><?= $fila->Nom_mun ?></option>
                <?php
            }
        }
    }


    public function llena_municipiosa() {
//        $options = "";
        if ($this->input->post('idestadoan')) {
            $idestadorecibido = $this->input->post('idestadoan');
            $municipios = $this->Ciudades_model->selMunicipios($idestadorecibido);
            foreach ($municipios as $fila) {
                 $val2 = $fila->Id_mun;
                ?>
                    
                <option value="<?= $fila->Id_mun; ?>"  ><!--?= set_select('municipio',$val2);?-->
                    <?php echo $fila->Nom_mun ?>                        
                </option>
                <?php
            }
        }
    }

  public function llena_municipios1() {
//        $options = "";
        if ($this->input->post('idest')) {
            $idestadorecibido = $this->input->post('idest');
            $municipios = $this->Ciudades_model->selMunicipios($idestadorecibido);
            foreach ($municipios as $fila) {
                ?>

                <option value="<?php $val2 = $fila->Id_mun; echo $fila->Id_mun; ?>" <?php echo set_select('municipio',$val2);?> >
                    <?php echo $fila->Nom_mun ?>                        
                </option>
                <?php
            }
        }
    }
}
