<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_Form_validation extends CI_Form_validation {

    public function validatexto($acerca) {
        $texto = "/^[A-Z,a-z,0-9, áéíóúñüÁÉÍÓÚÑÜ, ,\. ]+$/";
        if (preg_match($texto, $acerca)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function validanombre($acerca) {
        $texto = "/^[A-Z][a-z,A-Z, áéíóúñüÁÉÍÓÚÑÜ]+$/";
        if (preg_match($texto, $acerca)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
