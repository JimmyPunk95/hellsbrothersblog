<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/RepositorioPresentacion.php';
include_once 'app/escritorMiembros.php';
include_once 'app/escritorPresentaciones.php';

conexion::abrir_conexion();
$totalMiembros = RepositorioMiembro:: getNumeroMiembros(Conexion::obtener_conexion());
include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
<br>
<h2 class="text-center">
<i class="fas fa-users"></i> <?php echo $totalMiembros; ?>
</h2>
<br>

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-7">       
            
<?php            
EscritorMiembros::escribirMiembros();
?>
        
    </div>
</div>
</div>

<?php
include_once 'plantillas/fin.php';
