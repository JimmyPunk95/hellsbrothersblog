<?php

class Miembro{
    private $id;
    private $nombre;
    private $apellido;
    private $plataforma;
    private $nickname;
    private $email;
    private $password;
    private $ciudad;
    private $pais;
    private $estado;
    private $fechaNac;
    private $fechaReg;
    private $activo;
    
    public function __construct($id, $nombre, $apellido, $plataforma, 
            $nickname, $email, $password, $ciudad, $pais, 
            $estado, $fechaNac, $fechaReg, $activo){
        $this-> id=$id;
        $this-> nombre=$nombre;
        $this-> apellido=$apellido;
        $this-> plataforma=$plataforma;
        $this-> nickname=$nickname;
        $this-> email=$email;
        $this-> password=$password;
        $this-> ciudad=$ciudad;
        $this-> pais=$pais;
        $this-> estado=$estado;
        $this-> fechaNac=$fechaNac;
        $this-> fechaReg=$fechaReg;
        $this-> activo=$activo;
    }
    
    public function getId(){
        return $this-> id;
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
     public function getPassword(){
        return $this-> password;
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
     public function getFechaReg(){
        return $this-> fechaReg;
    }
     public function getActivo(){
        return $this-> activo;
    }
     public function SetNombre($nombre){
        return $this-> nombre = $nombre;
    }
    public function SetApellido($apellido){
        return $this-> apellido = $apellido;
    }
    public function SetPlataforma($plataforma){
        return $this-> plataforma = $plataforma;
    }
    public function SetNickname($nickname){
        return $this-> nickname = $nickname;
    }
     public function SetEmail($email){
        return $this-> email = $email;
    }
     public function SetPassword($password){
        return $this-> password = $password;
    }
    public function SetCiudad($ciudad){
        return $this-> ciudad = $ciudad;
    }
    public function SetEstado($estado){
        return $this-> nombre = $estado;
    }
    public function SetFechaNac($fechaNac){
        return $this-> fechaNac = $fechaNac;
    }
     public function SetActivo($activo){
        return $this-> activo = $activo;
    }
}

