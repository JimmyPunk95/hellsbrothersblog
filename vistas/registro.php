<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/validadorRegistro.php';
include_once 'app/Redireccion.php';

if(isset($_POST['enviar'])){
    conexion:: abrir_conexion();
    $validador= new validadorRegistro($_POST['nombre'], $_POST['apellido'],
            $_POST['plataforma'], $_POST['nickname'], $_POST['email'], 
            $_POST['clave1'], $_POST['clave2'], $_POST['ciudad'], $_POST['pais'],
            $_POST['estado'], $_POST['fechaNac'], $_POST['clanPassword'],
            conexion::obtener_conexion());
    
    if($validador -> registroValido()){
        $miembro= new Miembro('', $validador->getNombre(), $validador->getApellido(),
                $validador->getPlataforma(), $validador->getNickname(), $validador->getEmail(), 
                password_hash($validador->getClave(), PASSWORD_DEFAULT), $validador->getCiudad(),
                $validador->getPais(), $validador->getEstado(), $validador->getFechaNac(),
                '', '');
        $miembroInsertado= RepositorioMiembro::insertarMiembro(conexion::obtener_conexion(), $miembro);
        if($miembroInsertado){
            Redireccion::redirigir(REGISTRO_CORRECTO . '/' . $miembro->getNickname());
        }
    }
    conexion::cerrar_conexion();
}

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-7">
      <h2 class="mb-3 text-center">Registro</h2>
      <form role="form" method="post" id="formulario" action="<?php echo RUTA_REGISTRO ?>">
         <?php
            if(isset($_POST['enviar'])){
            include_once 'plantillas/registroValidado.php';
            }else{
            include_once 'plantillas/registroVacio.php';
            }
            ?>
      </form>
    </div>
</div>
</div>
      
      <?php
      include_once 'plantillas/fin.php';