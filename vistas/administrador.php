<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/administrarMiembros.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';

if(!ControlSesion::sesionIniciada() || $_SESSION['idMiembro'] !== '0' || $_SESSION['nicknameMiembro'] !== 'administrador'){
    Redireccion::redirigir(SERVIDOR);
}else{
    conexion::abrir_conexion();
}

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>

<br>
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        
            
<?php            
administrarMiembros::recuperarMiembros();
?>
            
    </div>
</div>
</div>

<?php
include_once 'plantillas/fin.php';


