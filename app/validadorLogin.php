<?php

include_once 'RepositorioMiembros.php';

class ValidadorLogin {

    private $miembro;
    private $error;

    public function __construct($email, $clave, $conexion) {
        $this-> error="";
        if(!$this-> variableIniciada($email) || !$this-> variableIniciada($clave)){
            $this-> miembro= null;
            $this-> error= "Debes introducir tu Correo y tu Contraseña";
        } else {
            $this-> miembro = RepositorioMiembro::getMiembroEmail($conexion, $email);
            if(is_null($this-> miembro) || !password_verify($clave, $this-> miembro-> getPassword())){
                $this-> error= "Datos Incorrectos";
            }
        }
    }

    private function variableIniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getMiembro(){
        return $this-> miembro;
    }
    public function getError(){
        return $this-> error;
    }
    public function mostrarError(){
        if($this->error !== ''){
            echo "<div class='alert alert-danger' role='alert'>";
            echo $this->error;
            echo "</div>";
        }
    }
}

