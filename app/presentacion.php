<?php

class Presentacion{
    private $id;
    private $miembro_id;
    private $presentacion;
    private $fecha;
    private $activa;
    
    public function __construct($id, $miembro_id, $presentacion, $fecha, $activa){
        $this-> id=$id;
        $this-> miembro_id=$miembro_id;
        $this-> presentacion=$presentacion;
        $this-> fecha=$fecha;
        $this-> activa=$activa;
    }
    
    public function getId(){
        return $this-> id;
    }
     public function getMiembroId(){
        return $this-> miembro_id;
    }
     public function getPresentacion(){
        return $this-> presentacion;
    }
     public function getFecha(){
        return $this-> fecha;
    }
     public function getActiva(){
        return $this-> activa;
    }
     public function SetPresentacion($presentacion){
        return $this-> presentacion = $presentacion;
    }
     public function Setactiva($activa){
        return $this-> activa = $activa;
    }
}




