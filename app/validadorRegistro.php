<?php
include_once 'RepositorioMiembros.php';
include_once 'validador.php';

class validadorRegistro extends validador{

    public function __construct($nombre, $apellido, $plataforma, $nickname, $email, 
            $clave1, $clave2, $ciudad, $pais, $estado, $fechaNac, $clanPassword, $conexion) {
        $this->avisoInicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->avisoFin = "</div>";
        $this->nombre = "";
        $this->apellido = "";
        $this->plataforma = "";
        $this->nickname = "";
        $this->email = "";
        $this->clave = "";
        $this->ciudad = "";
        $this->pais = "";
        $this->estado = "";
        $this->fechaNac = "";
        $this->clanPassword = "";
        $this->errorNombre = $this->validarNombre($nombre);
        $this->errorApellido = $this->validarApellido($apellido);
        $this->errorPlataforma = $this->validarPlataforma($plataforma);
        $this->errorNickname = $this->validarNickname($nickname);
        $this->errorEmail = $this->validarEmail($conexion, $email);
        $this->errorClave1 = $this->validarClave1($clave1);
        $this->errorClave2 = $this->validarClave2($clave2, $clave1);
        
        if($this-> errorClave1==='' && $this-> errorClave2===''){
            $this-> clave= $clave1;
        }
        $this->errorCiudad = $this->validarCiudad($ciudad);
        $this->errorPais = $this->validarPais($pais);
        $this->errorEstado = $this->validarEstado($estado);
        $this->errorFechaNac = $this->validarFechaNac($fechaNac);
        $this->errorClanPassword = $this->validarClanPassword($clanPassword);
    }

}

