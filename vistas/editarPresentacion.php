<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/presentacion.php';
include_once 'app/RepositorioPresentacion.php';
include_once 'app/validadorEditarPresentacion.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';

conexion::abrir_conexion();
if(isset($_POST['guardar-presentacion'])){
    $validadorPresentacion= new ValidadorEditarPresentacion($_POST['presentacion'], $_POST['presentacion-original'],      
    conexion::obtener_conexion());
    
    if(!$validadorPresentacion->hayCambios()){
    Redireccion::redirigir(RUTA_PERFIL);
    }else{
        if($validadorPresentacion->presentacionValida()){
            $cambioEfectuado = RepositorioPresentacion::actualizarPresentacion(conexion::obtener_conexion(),
                    $_POST['idMiembro'], $validadorPresentacion->getPresentacion());
        }
        if($cambioEfectuado){
            Redireccion::redirigir(RUTA_PERFIL);
        }
    }
}

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-7">
      <h2 class="mb-3 text-center">Editar Presentación</h2>
      <form role="form" method="post" id="formulario" action="<?php echo RUTA_EDITAR_PRESENTACION ?>">
         <?php
                if (isset($_POST['editar_presentacion'])) {
                    $id_Miembro = $_SESSION['idMiembro'];
                    $PresentacionRecuperada= RepositorioPresentacion::getPresentacionMiembroId(conexion::obtener_conexion(), $id_Miembro);
                    include_once 'plantillas/presentacionRecuperada.php';
                    
                    conexion::cerrar_conexion();
                    
                } else if(isset ($_POST['guardar-presentacion'])){
                    $id_Miembro = $_SESSION['idMiembro'];
                    $PresentacionRecuperada= RepositorioPresentacion::getPresentacionMiembroId(conexion::obtener_conexion(), $id_Miembro);
                    include_once 'plantillas/presentacionRecuperadaValidada.php';
                }
                ?>
      </form>
    </div>
</div>
</div>

<?php
include_once 'plantillas/fin.php';
