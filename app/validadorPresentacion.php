<?php

include_once 'RepositorioPresentacion.php';

class ValidadorPresentacion {

private $avisoInicio;
private $avisoFin;
private $presentacion;
private $errorPresentacion;

    public function __construct($presentacion, $conexion) {
        $this->avisoInicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->avisoFin = "</div>";
        $this->presentacion = "";
        $this->errorPresentacion = $this->validarPresentacion($conexion, $presentacion);
    }

    private function variableIniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    
    private function validarPresentacion($conexion, $presentacion) {
        if (!$this->variableIniciada($presentacion)) {
            return "Escribe algo sobre ti :)";
        } else {
            $this->presentacion = $presentacion;
        }
        return "";
    }

    public function getPresentacion() {
        return $this->presentacion;
    }
    
    public function mostrarPresentacion() {
        if ($this->presentacion !== "" && strlen(trim($this->presentacion)) > 0) {
            echo $this->presentacion;
        }
    }

    public function mostrarErrorPresentacion() {
        if ($this->errorPresentacion !== "") {
            echo $this->avisoInicio . $this->errorPresentacion . $this->avisoFin;
        }
    }

    public function presentacionValida() {
        if ($this->errorPresentacion == "") {
            return true;
        } else {
            return false;
        }
    }

}


