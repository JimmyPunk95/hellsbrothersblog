<?php

class ControlSesion{
    
    public static function iniciarSesion($idMiembro, $nicknameMiembro){
        if(session_id() == ''){
            session_start();
        }
        $_SESSION['idMiembro'] = $idMiembro;
        $_SESSION['nicknameMiembro'] = $nicknameMiembro;
    }
    
    public static function cerrarSesion(){
        if(session_id() == ''){
            session_start();
        }
        if(isset($_SESSION['idMiembro'])){
            unset($_SESSION['idMiembro']);
        }
        if(isset($_SESSION['nicknameMiembro'])){
            unset($_SESSION['nicknameMiembro']);
        }
        session_destroy();
    }
    public static function sesionIniciada(){
        if(session_id() == ''){
            session_start();
        }
        if(isset($_SESSION['idMiembro']) && isset($_SESSION['nicknameMiembro'])){
            return true;
        }else{
            return false;
        }
    }
    
    public static function sesionAdministrador($emailMiembro, $password){
        if(session_id() == ''){
            session_start();
        }
        
        $_SESSION['idMiembro'] = '0';
        $_SESSION['nicknameMiembro'] = 'administrador';
        
        if($emailMiembro=='administrador@hellsbrothers.com' && $password=='0987654321'){
            return true;
        }else{
            $_SESSION['idMiembro'] = null;
            $_SESSION['nicknameMiembro'] = null;
            return false;
        }
    }
    
    
}


