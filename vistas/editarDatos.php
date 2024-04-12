<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/validadorEditarDatos.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';

conexion::abrir_conexion();
if(isset($_POST['guardar-cambios'])){
    $validador= new validadorEditarDatos($_POST['nombre'], $_POST['nombre-original'],
    $_POST['apellido'], $_POST['apellido-original'], $_POST['plataforma'], $_POST['plataforma-original'],
    $_POST['nickname'], $_POST['nickname-original'], $_POST['email'], $_POST['email-original'],
    $_POST['ciudad'], $_POST['ciudad-original'], $_POST['pais'], $_POST['pais-original'],
    $_POST['estado'], $_POST['estado-original'], $_POST['fechaNac'], $_POST['fechaNac-original'],       
    conexion::obtener_conexion());
    
    if(!$validador->hayCambios()){
        Redireccion::redirigir(RUTA_PERFIL);
    }else{
        if($validador->editarValido()){

            $cambioEfectuado = RepositorioMiembro::actualizarMiembro(conexion::obtener_conexion(),
                    $_POST['idMiembro'], $validador->getNombre(), $validador->getApellido(),
                    $validador->getPlataforma(), $validador->getNickname(), $validador->getEmail(), 
                    $validador->getCiudad(), $validador->getPais(), $validador->getEstado(),
                    $validador->getFechaNac());
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
      <h2 class="mb-3 text-center">Editar Datos</h2>
      <form role="form" method="post" id="formulario" action="<?php echo RUTA_EDITAR ?>">
         <?php
                if (isset($_POST['editar_datos'])) {
                    $id_Miembro = $_SESSION['idMiembro'];
                    $MiembroRecuperado= RepositorioMiembro::getMiembroId(conexion::obtener_conexion(), $id_Miembro);
                    include_once 'plantillas/datosRecuperados.php';
                    
                    conexion::cerrar_conexion();
                    
                } else if(isset ($_POST['guardar-cambios'])){
                    $id_Miembro = $_SESSION['idMiembro'];
                    $MiembroRecuperado= RepositorioMiembro::getMiembroId(conexion::obtener_conexion(), $id_Miembro);
                    include_once 'plantillas/datosRecuperadosValidados.php';
                }
                ?>
      </form>
    </div>
</div>
</div>

<?php
include_once 'plantillas/fin.php';