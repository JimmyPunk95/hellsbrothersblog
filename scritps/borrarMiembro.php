<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/Redireccion.php';

if(isset($_POST['borrar_miembro'])){
    $miembroId= $_POST['id_borrar'];
    
    conexion::abrir_conexion();
    RepositorioMiembro::eliminarMiembro(conexion::obtener_conexion(), $miembroId);
    conexion::cerrar_conexion();
    Redireccion::redirigir(ADMINISTRADOR);
}