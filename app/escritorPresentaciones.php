<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioPresentacion.php';

class EscritorPresentaciones {

    public static function escribirPresentaciones() {
        $presentaciones = RepositorioPresentacion::getTodas(conexion::obtener_conexion());

        if (count($presentaciones)) {
            foreach ($presentaciones as $presentacion){
                self::escribirPresentacion($presentacion);
            }
        }
    }
    
    public static function escribirPresentacion($id) {
        $miembroId = RepositorioPresentacion::getPresentacionMiembroId(conexion::obtener_conexion(), $id);
       
        if(isset($miembroId)){
           echo nl2br($miembroId->getPresentacion());    
        }else{
            echo "";
        }
    }
}
    
