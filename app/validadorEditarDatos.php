<?php
include_once 'RepositorioMiembros.php';
include_once 'validador.php';

class validadorEditarDatos extends validador{
    
    private $cambios;
    private $nombreOriginal;
    private $apellidoOriginal;
    private $plataformaOriginal;
    private $nicknameOriginal;
    private $emailOriginal;
    private $ciudadOriginal;
    private $paisOriginal;
    private $estadoOriginal;
    private $fechaNacOriginal;


    public function __construct($nombre, $nombreOriginal, $apellido, $apellidoOriginal, 
            $plataforma, $plataformaOriginal, $nickname, $nicknameOriginal,
            $email, $emailOriginal, $ciudad, $ciudadOriginal, $pais, $paisOriginal,
            $estado, $estadoOriginal, $fechaNac, $fechaNacOriginal, $conexion) {
        
        $this->nombre=$this->devolverVariableIniciada($nombre);
        $this->apellido=$this->devolverVariableIniciada($apellido);
        $this->plataforma=$this->devolverVariableIniciada($plataforma);
        $this->nickname=$this->devolverVariableIniciada($nickname);
        $this->email=$this->devolverVariableIniciada($email);
        $this->ciudad=$this->devolverVariableIniciada($ciudad);
        $this->pais=$this->devolverVariableIniciada($pais);
        $this->estado=$this->devolverVariableIniciada($estado);
        $this->fechaNac=$this->devolverVariableIniciada($fechaNac);
        
        $this->nombreOriginal=$this->devolverVariableIniciada($nombreOriginal);
        $this->apellidoOriginal=$this->devolverVariableIniciada($apellidoOriginal);
        $this->plataformaOriginal=$this->devolverVariableIniciada($plataformaOriginal);
        $this->nicknameOriginal=$this->devolverVariableIniciada($nicknameOriginal);
        $this->emailOriginal=$this->devolverVariableIniciada($emailOriginal);
        $this->ciudadOriginal=$this->devolverVariableIniciada($ciudadOriginal);
        $this->paisOriginal=$this->devolverVariableIniciada($paisOriginal);
        $this->estadoOriginal=$this->devolverVariableIniciada($estadoOriginal);
        $this->fechaNacOriginal=$this->devolverVariableIniciada($fechaNacOriginal);
        
        if($this->nombre==$this->nombreOriginal && $this->apellido==$this->apellidoOriginal &&
                $this->plataforma==$this->plataformaOriginal && $this->nickname==$this->nicknameOriginal &&
                $this->email==$this->emailOriginal && $this->ciudad==$this->ciudadOriginal &&
                $this->pais==$this->paisOriginal && $this->estado==$this->estadoOriginal &&
                $this->fechaNac==$this->fechaNacOriginal){
            $this->cambios= false;
        }else{
            $this->cambios= true;
        }
        if($this->cambios){
            $this->avisoInicio = "<br><div class='alert alert-danger' role='alert'>";
            $this->avisoFin = "</div>";
            
            if($this->nombre !== $this->nombreOriginal){
                $this->errorNombre = $this->validarNombre($this->nombre);
            }else{
                $this->errorNombre= "";
            }
            if($this->apellido !== $this->apellidoOriginal){
                $this->errorApellido= $this->validarApellido($this->apellido);
            }else{
                $this->errorApellido= "";
            }
            if($this->plataforma !== $this->plataformaOriginal){
                $this->errorPlataforma= $this->validarPlataforma($this->plataforma);
            }else{
                $this->errorPlataforma= "";
            }
            if($this->nickname !== $this->nicknameOriginal){
                $this->errorNickname= $this->validarNickname($this->nickname);
            }else{
                $this->errorNickname= "";
            }
            if($this->email !== $this->emailOriginal){
                $this->errorEmail= $this->validarEmail($conexion, $this->email);
            }else{
                $this->errorEmail= "";
            }
            if($this->ciudad !== $this->ciudadOriginal){
                $this->errorCiudad= $this->validarCiudad($this->ciudad);
            }else{
                $this->errorCiudad= "";
            }
            if($this->pais !== $this->paisOriginal){
                $this->errorpais= $this->validarPais($this->pais);
            }else{
                $this->errorPais= "";
            }
            if($this->estado !== $this->estadoOriginal){
                $this->errorEstado= $this->validarEstado($this->estado);
            }else{
                $this->errorEstado= "";
            }
            if($this->fechaNac !== $this->fechaNacOriginal){
                $this->errorfechaNac= $this->validarFechaNac($this->fechaNac);
            }else{
                $this->errorfechaNac= "";
            }
        }
    }
    
    private function devolverVariableIniciada($variable) {
        if ($this->variableIniciada($variable)) {
            return $variable;
        } else {
            return "";
        }
    }
    
    public function hayCambios(){
        return $this->cambios;
    }
    
    
    public function getNombreOriginal(){
        return $this->nombreOriginal;
    }
    
    public function getApellidoOriginal(){
        return $this->apellidoOriginal;
    }
    
    public function getPlataformaOriginal(){
        return $this->plataformaOriginal;
    }
    
    public function getNicknameOriginal(){
        return $this->nicknameOriginal;
    }
    
    public function getEmailOriginal(){
        return $this->emailOriginal;
    }
    
    public function getCiudadOriginal(){
        return $this->ciudadOriginal;
    }
    
    public function getPaisOriginal(){
        return $this->paisOriginal;
    }
    
    public function getEstadoOriginal(){
        return $this->estadoOriginal;
    }
    
    public function getFechaNacOriginal(){
        return $this->fechaNacOriginal;
    }
    
}
