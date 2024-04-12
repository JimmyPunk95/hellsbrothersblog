<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/presentacion.php';
include_once 'app/RepositorioPresentacion.php';
include_once 'app/RepositorioMiembros.php';

$componentes_url= parse_url($_SERVER['REQUEST_URI']);
$ruta= $componentes_url['path'];

$partes_ruta= explode('/', $ruta);
$partes_ruta= array_filter($partes_ruta);
$partes_ruta= array_slice($partes_ruta, 0);

$ruta_elegida= 'vistas/404.php';

if($partes_ruta[0]== 'HellsB'){
    if(count($partes_ruta)== 1){
        $ruta_elegida= 'vistas/home.php';
    }else if(count($partes_ruta)== 2){
        switch ($partes_ruta[1]){
            case 'login':
                $ruta_elegida= 'vistas/login.php';
                break;
            case 'registro':
                $ruta_elegida= 'vistas/registro.php';
                break;
            case 'logout':
                $ruta_elegida= 'vistas/logout.php';
                break;
            case 'perfil':
                $ruta_elegida= 'vistas/perfil.php';
            break;
            case 'miembros':
                $ruta_elegida= 'vistas/miembros.php';
            break;
            case 'sorteos':
                $ruta_elegida= 'vistas/sorteos.php';
            break;
            case 'torneos':
                $ruta_elegida= 'vistas/torneos.php';
            break;
            case 'contacto':
                $ruta_elegida= 'vistas/contacto.php';
            break;
            case 'editar-datos':
                $ruta_elegida= 'vistas/editarDatos.php';
            break;
            case 'presentacion':
                $ruta_elegida= 'vistas/presentacion.php';
            break;
            case 'editar-presentacion':
                $ruta_elegida= 'vistas/editarPresentacion.php';
            break;
            case 'administrador':
                $ruta_elegida= 'vistas/administrador.php';
            break;
            case 'borrar':
                $ruta_elegida= 'scritps/borrarMiembro.php';
            break;
        }
    }else if(count($partes_ruta)== 3){
        if($partes_ruta[1]== 'registro-correcto'){
            $nombre = $partes_ruta[2];
            $ruta_elegida= 'vistas/registroCorrecto.php';
        }   
        }
    }

include_once $ruta_elegida;

