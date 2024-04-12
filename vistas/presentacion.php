<?php

include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/presentacion.php';
include_once 'app/RepositorioPresentacion.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';
include_once 'app/validadorPresentacion.php';

if(isset($_POST['publicar'])){
    conexion:: abrir_conexion();
    $validador= new ValidadorPresentacion($_POST['presentacion'],
            conexion::obtener_conexion());
    
    if($validador ->presentacionValida()){
        if(ControlSesion::sesionIniciada()){
        $presentacion= new Presentacion('', $_SESSION['idMiembro'], $validador->getPresentacion(), '', '');
        $presentacionInsertada= RepositorioPresentacion::insertarPresentacion(conexion::obtener_conexion(), $presentacion);
        
        if($presentacionInsertada){
            Redireccion::redirigir(RUTA_PERFIL);
            
        }
    }else{
        Redireccion::redirigir(RUTA_LOGIN);
    }
    conexion::cerrar_conexion();
}
}

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>

<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-7">
      <h2 class="mb-3 text-center">Presentación</h2>
      <form role="form" method="post" id="formulario" action="<?php echo RUTA_PRESENTACION ?>">
         <?php
            if(isset($_POST['publicar'])){
            include_once 'plantillas/presentacionValidada.php';
            }else{
            include_once 'plantillas/presentacionVacia.php';
            }
            ?>
      </form>
    </div>
</div>
</div>
      
      <?php
      include_once 'plantillas/fin.php';

