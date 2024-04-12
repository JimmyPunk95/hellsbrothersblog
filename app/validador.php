<?php

abstract class validador{

protected $avisoInicio;
protected $avisoFin;
protected $nombre;
protected $apellido;
protected $plataforma;
protected $nickname;
protected $email;
protected $clave;
protected $ciudad;
protected $pais;
protected $estado;
protected $fechaNac;
protected $errorNombre;
protected $errorApellido;
protected $errorPlataforma;
protected $errorNickname;
protected $errorEmail;
protected $errorClave1;
protected $errorClave2;
protected $errorCiudad;
protected $errorPais;
protected $errorEstado;
protected $errorFechaNac;
protected $errorClanPassword;


    public function __construct() {
    }
    
    protected function variableIniciada($variable){
        if (isset($variable) && !empty($variable)){
            return true;
        } else {
            return false;
        }
    }

    protected function validarNombre($nombre) {
        if (!$this->variableIniciada($nombre)) {
            return "Debes escribir un nombre de usuario";
        } else {
            $this->nombre = $nombre;
        }
        if (strlen($nombre) < 3) {
            return "El nombre debe ser más largo de 2 carácteres";
        }
        if (strlen($nombre) > 30) {
            return "El nombre no debe exceder de más de 30 carácteres";
        }
        //if(RepositorioUsuario:: existeNombre($conexion, $nombre)){
          //  return "Este nombre de usuario existe";
        //}
        return "";
    }
    
    protected function validarApellido($apellido) {
        if (!$this->variableIniciada($apellido)) {
            return "Debes escribir un apellido de usuario";
        } else {
            $this->apellido = $apellido;
        }
        if (strlen($apellido) < 3) {
            return "El apellido debe ser más largo que 2 carácteres";
        }
        if (strlen($apellido) > 30) {
            return "El apellido no debe exceder de más de 30 carácteres";
        }
        return "";
    }
    
    protected function validarPlataforma($plataforma) {
        if (!$this->variableIniciada($plataforma)) {
            return "Debes escoger una plataforma";
        } else {
            $this->plataforma = $plataforma;
        }
        return "";
    }

    protected function validarNickname($nickname) {
        if (!$this->variableIniciada($nickname)) {
            return "Debes escribir un apellido de usuario";
        } else {
            $this->nickname = $nickname;
        }
        if (strlen($nickname) < 3) {
            return "El nickname debe ser más largo que 2 carácteres";
        }
        if (strlen($nickname) > 25) {
            return "El nickname no debe exceder de más de 25 carácteres";
        }
        return "";
    }
    
    protected function validarEmail($conexion, $email) {
        if (!$this->variableIniciada($email)) {
            return "Debes escribir un correo";
        } else {
            $this->email = $email;
        }
        if(RepositorioMiembro::existeEmail($conexion, $email)){
            return "Este correo ya se encuentra registrado";
        }
        return "";
    }

    protected function validarClave1($clave1) {
        if (!$this->variableIniciada($clave1)) {
            return "Debes escribir una contraseña";
        }
        return "";
    }

    protected function validarClave2($clave2, $clave1) {
        if (!$this->variableIniciada($clave1)) {
            return "Debes llenar primero el campo anterior";
        }
        if (!$this->variableIniciada($clave2)) {
            return "Debes repetir la misma contraseña";
        }
        if ($clave1 !== $clave2) {
            return "Las contraseñas no coinciden";
        }
        return "";
    }
    
    protected function validarCiudad($ciudad) {
        if (!$this->variableIniciada($ciudad)) {
            return "Debes escribir la ciudad dónde recides";
        } else {
            $this->ciudad = $ciudad;
        }
        if (strlen($ciudad) < 3) {
            return "El nombre de la ciudad debe ser más largo que 2 carácteres";
        }
        if (strlen($ciudad) > 30) {
            return "El nombre de la ciudad no debe exceder de más de 30 carácteres";
        }
        return "";
    }
    
    protected function validarPais($pais) {
        if (!$this->variableIniciada($pais)) {
            return "Debes escoger un País";
        } else {
            $this->pais = $pais;
        }
        return "";
    }
    
    protected function validarEstado($estado) {
        if (!$this->variableIniciada($estado)) {
            return "Debes escoger un Estado";
        } else {
            $this->estado = $estado;
        }
        return "";
    }
    
    protected function validarFechaNac($fechaNac) {
        if (!$this->variableIniciada($fechaNac)) {
            return "Debes colocar tu fecha de nacimiento";
        } else {
            $this->fechaNac = $fechaNac;
        }
        return "";
    }
    
    protected function validarClanPassword($clanPassword) {
        if (!$this->variableIniciada($clanPassword)) {
            return "Debes escribir la contraseña correcta";
        }
        if ($clanPassword !== "teamHB2020") {
            return "Contraseña Incorrecta";
        }
        return "";
    }
    
    public function getNombre(){
        return $this-> nombre;
    }
    public function getApellido(){
        return $this-> apellido;
    }
    public function getPlataforma(){
        return $this-> plataforma;
    }
    public function getNickname(){
        return $this-> nickname;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function getClave(){
        return $this-> clave;
    }
    public function getCiudad(){
        return $this-> ciudad;
    }
    public function getPais(){
        return $this-> pais;
    }
    public function getEstado(){
        return $this-> estado;
    }
    public function getFechaNac(){
        return $this-> fechaNac;
    }
    public function getClanPassword(){
        return $this-> clanPassword;
    }
    public function getErrorNombre(){
        return $this-> errorNombre;
    }
    public function getErrorApellido(){
        return $this-> errorApellido;
    }
    public function getErrorPlataforma(){
        return $this-> errorPlataforma;
    }
    public function getErrorNickname(){
        return $this-> errorNickname;
    }
    public function getErrorEmail(){
        return $this-> errorEmail;
    }
    public function getErrorClave1(){
        return $this-> errorClave1;
    }
    public function getErrorClave2(){
        return $this-> errorClave2;
    }
    public function getErrorCiudad(){
        return $this-> errorCiudad;
    }
    public function getErrorPais(){
        return $this-> errorPais;
    }
    public function getErrorEstado(){
        return $this-> errorEstado;
    }
    public function getErrorFechaNac(){
        return $this-> errorFechaNac;
    }
    public function getErrorClanPassword(){
        return $this-> errorClanPassword;
    }
    
    public function mostrarNombre(){
        if($this-> nombre!== ""){
            echo 'value="'. $this -> nombre .'"';
        }
    }
    public function mostrarErrorNombre(){
        if($this-> errorNombre !== ""){
            echo $this-> avisoInicio . $this-> errorNombre . $this-> avisoFin;
        }
    }
     public function mostrarApellido(){
        if($this-> apellido!== ""){
            echo 'value="'. $this -> apellido .'"';
        }
    }
    public function mostrarErrorApellido(){
        if($this-> errorApellido !== ""){
            echo $this-> avisoInicio . $this-> errorApellido . $this-> avisoFin;
        }
    }
     public function mostrarPlataforma(){
        if($this-> plataforma!== ""){
            echo 'value="'. $this -> plataforma .'"';
        }
    }
    public function mostrarErrorPlataforma(){
        if($this-> errorPlataforma !== ""){
            echo $this-> avisoInicio . $this-> errorPlataforma . $this-> avisoFin;
        }
    }
     public function mostrarNickname(){
        if($this-> nickname!== ""){
            echo 'value="'. $this -> nickname .'"';
        }
    }
    public function mostrarErrorNickname(){
        if($this-> errorNickname !== ""){
            echo $this-> avisoInicio . $this-> errorNickname . $this-> avisoFin;
        }
    }
    public function mostrarEmail(){
        if($this-> email!== ""){
            echo 'value="'. $this -> email .'"';
        }
    }
    public function mostrarErrorEmail(){
        if($this-> errorEmail !== ""){
            echo $this-> avisoInicio . $this-> errorEmail . $this-> avisoFin;
        }
    }
    public function mostrarErrorClave1(){
        if($this-> errorClave1 !== ""){
            echo $this-> avisoInicio . $this-> errorClave1 . $this-> avisoFin;
        }
    }
    public function mostrarErrorClave2(){
        if($this-> errorClave2 !== ""){
            echo $this-> avisoInicio . $this-> errorClave2 . $this-> avisoFin;
        }
    }
     public function mostrarCiudad(){
        if($this-> ciudad!== ""){
            echo 'value="'. $this -> ciudad .'"';
        }
    }
    public function mostrarErrorCiudad(){
        if($this-> errorCiudad !== ""){
            echo $this-> avisoInicio . $this-> errorCiudad . $this-> avisoFin;
        }
    }
     public function mostrarPais(){
        if($this-> pais!== ""){
            echo 'value="'. $this -> pais .'"';
        }
    }
    public function mostrarErrorPais(){
        if($this-> errorPais !== ""){
            echo $this-> avisoInicio . $this-> errorPais . $this-> avisoFin;
        }
    }
     public function mostrarEstado(){
        if($this-> estado!== ""){
            echo 'value="'. $this -> estado .'"';
        }
    }
    public function mostrarErrorEstado(){
        if($this-> errorEstado !== ""){
            echo $this-> avisoInicio . $this-> errorEstado . $this-> avisoFin;
        }
    }
    public function mostrarFechaNac(){
        if($this-> fechaNac!== ""){
            echo 'value="'. $this -> fechaNac .'"';
        }
    }
    public function mostrarErrorFechaNac(){
        if($this-> errorFechaNac !== ""){
            echo $this-> avisoInicio . $this-> errorFechaNac . $this-> avisoFin;
        }
    }
    
    public function mostrarClanPassword(){
        if($this-> clanPassword!== ""){
            echo 'value="'. $this -> clanPassword .'"';
        }
    }
    public function mostrarErrorClanPassword(){
        if($this-> errorClanPassword !== ""){
            echo $this-> avisoInicio . $this-> errorClanPassword . $this-> avisoFin;
        }
    }
    
    public function registroValido(){
        if($this-> errorNombre === "" && $this-> errorApellido === "" && 
                $this-> errorPlataforma === "" && $this-> errorNickname === "" &&
                $this-> errorEmail === "" && $this-> errorClave1 === "" && 
                $this-> errorClave2 === "" && $this-> errorCiudad === "" &&
                $this-> errorPais === "" && $this-> errorEstado === "" &&
                $this-> errorFechaNac === "" && $this-> errorClanPassword === ""){
            return true;
        } else{
            return false;
        }
    }
    
    public function editarValido(){
        if($this-> errorNombre == "" && $this-> errorApellido == "" && 
                $this-> errorPlataforma == "" && $this-> errorNickname == "" &&
                $this-> errorEmail == "" && $this-> errorCiudad == "" &&
                $this-> errorPais == "" && $this-> errorEstado == "" &&
                $this-> errorFechaNac == ""){
            return true;
        } else{
            return false;
        }
    }
}
