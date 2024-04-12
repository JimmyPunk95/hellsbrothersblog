<?php

include_once 'RepositorioPresentacion.php';

class ValidadorEditarPresentacion {

private $avisoInicio;
private $avisoFin;
private $cambios;
private $presentacion;
private $presentacionOriginal;
private $errorPresentacion;

    public function __construct($presentacion, $presentacionOriginal, $conexion) {
         
        $this->presentacion=$this->devolverVariableIniciada($presentacion);
        $this->presentacionOriginal=$this->devolverVariableIniciada($presentacionOriginal);
    
         if($this->presentacion == $this->presentacionOriginal){
            $this->cambios= false;
        }else{
            $this->cambios= true;
        }
        
        if($this->cambios){
            $this->avisoInicio = "<br><div class='alert alert-danger' role='alert'>";
            $this->avisoFin = "</div>";
            
            if($this->presentacion !== $this->presentacionOriginal){
                $this->errorPresentacion = $this->validarPresentacion($conexion, $this->presentacion);
            }else{
                $this->errorPresentacion= "";
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
    
    public function hayCambios(){
        return $this->cambios;
    }
    
    private function devolverVariableIniciada($variable) {
        if ($this->variableIniciada($variable)) {
            return $variable;
        } else {
            return "";
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
    
    public function getPresentacionOriginal() {
        return $this->presentacionOriginal;
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
