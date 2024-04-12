<?php
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: ". gmdate("D, d M Y H:i:s") ." GMT");
header("Cache-Control: no store, no cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0, false");
header("Pragma: no-cache");

include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/presentacion.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/RepositorioPresentacion.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';
include_once 'app/validadorPresentacion.php';

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';

if(!ControlSesion::sesionIniciada()){
    Redireccion::redirigir(SERVIDOR);
}else{
conexion::abrir_conexion();
$miembro = RepositorioMiembro::getMiembroId(conexion::obtener_conexion(), $_SESSION['idMiembro']);
$presentacion = RepositorioPresentacion::getPresentacionMiembroId(conexion::obtener_conexion(), $_SESSION['idMiembro']);
}   

$error="";
if(isset($_POST['guardar-imagen']) && !empty($_FILES['archivo_subido']['tmp_name'])){
    $directorio=DIRECTORIO_RAIZ."/subidas/";
    $carpeta_objetivo=$directorio.basename($_FILES['archivo_subido']['name']);
    $subida_correcta=1;
    
    $tipo_imagen= pathinfo($carpeta_objetivo, PATHINFO_EXTENSION);
    
    $comprobacion= getimagesize($_FILES['archivo_subido']['tmp_name']);
    if($comprobacion !== false){
        $subida_correcta=1;
    }else{
        $subida_correcta=0;
    }
    
    if($_FILES['archivo_subido']['size']> 1000000){
        $error= "El archivo no puede ocupar más de 1Mb";
        $subida_correcta=0;
    }
    if($tipo_imagen != "jpg" && $tipo_imagen != "png" && $tipo_imagen != "jpeg" && $tipo_imagen != "gif"){
        $error= "No se admite esa extención de archivo";
        $subida_correcta=0;
    }
    if($subida_correcta==0){
        $error= "Tu archivo no puede ocupar más de 1MB y debe tener una extención valida";
    }else{
        if(move_uploaded_file($_FILES['archivo_subido']['tmp_name'], 
                DIRECTORIO_RAIZ."/subidas/".$miembro->getId())){
        $error= "El archivo".basename($_FILES['archivo_subido']['name'])." ha sido cambiado como imagen de perfil";
        }else{
        $error= "Ha ocurrido un error";
        }
    }

}

?>
<br>
<div class="container">
    <div class="row justify-content-center" id="perfil">
        <div class="col-md-6 text-center">
            <div class="row">
                        <div class="col-md-4 py-1">
                            <?php $icon=$miembro->getPlataforma(); 
                            if($icon=='Xbox One'){
                             echo $icon= '<h4><i class="fab fa-xbox"></i></h4>';
                            }
                            if($icon=='Play Station'){
                             echo $icon= '<h4><i class="fab fa-playstation"></i></h4>';
                            }
                            if($icon=='Nintendo'){
                             echo $icon= '<img class="mb-3" src="img/nintendo.jpg" width="25" height="25">';
                            }
                             if($icon=='PC'){
                             echo $icon= '<h4><i class="fas fa-laptop"></i></h4>';
                            }
                            if($icon=='Móvil'){
                             echo $icon= '<h4><i class="fas fa-mobile-alt"></i></h4>';
                            }
                            ?>
                        </div>
                        <div class="col-md-8 mb-2 py-1 bg-light">
                            <b><?php echo $miembro->getNickname(); ?></b>
                        </div>
                    </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <?php 
                    if(file_exists(DIRECTORIO_RAIZ."/subidas/".$miembro->getId())){
                        ?>
                    <img class="img-responsive mb-2" src="<?php echo SERVIDOR.'/subidas/'.$miembro->getId(); ?>" width="200" height="220">
                    <?php
                    }else{
                        ?>
                    <img class="mb-2" src="img/sinperfil.png" width="200" height="220">
                    <?php
                    }
                    ?>        
                </div>  
            </div>
            <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <a><form class="text-center" action="<?php echo RUTA_PERFIL; ?>" method="post" enctype="multipart/form-data">
                            <label for="archivo_subido" id="label-archivo"><i class="far fa-folder-open"></i> Cambiar</label>
                            <input type="file" name="archivo_subido" id="archivo_subido" class="boton_subir">
                            <input type="submit" value="Guardar" name="guardar-imagen" class="form-control">
                            </form></a>
                    </div>
                </div>
            <?php
            if($error !== ''){
            echo "<div class='alert alert-danger' role='alert'>";
            echo $error;
            echo "</div>";
            } ?>
            
            </div>
        <div class="col-md-6 text-center">
            <div class="row">
                <div class="col-md-4 py-1 border bg-light">
                            Nombre(s):
                        </div>
            <div class="col-md-8 py-1 border bg-light">
                <?php echo $miembro->getNombre(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 py-1 border bg-light">
                            Apellido(s):
                        </div>
                        <div class="col-md-8 py-1 border bg-light">
                            <?php echo $miembro->getApellido(); ?>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-4 py-1 border bg-light">
                            Correo:
                        </div>
                        <div class="col-md-8 py-1 border bg-light">
                            <?php echo $miembro->getEmail(); ?>
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-4 py-1 border bg-light">
                            País:
                        </div>
                        <div class="col-md-8 py-1 border bg-light">
                            <?php echo $miembro->getPais(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 py-1 border bg-light">
                            Estado:
                        </div>
                        <div class="col-md-8 py-1 border bg-light">
                            <?php echo $miembro->getEstado(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 py-1 border bg-light">
                            Ciudad:
                        </div>
                        <div class="col-md-8 py-1 border bg-light">
                            <?php echo $miembro->getCiudad(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 py-1 border bg-light">
                            Fecha de Nacimiento:
                        </div>
                        <div class="col-md-7 py-1 border bg-light">
                            <?php echo $miembro->getFechaNac(); ?>
                        </div>
                    </div><br>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <form method="post" action="<?php echo RUTA_EDITAR; ?>">
                <input type="hidden" name="id_editar" value="<?php echo $miembro->getId(); ?>">
                <button class="boton_editar btn-primary mb-2" type="submit" name="editar_datos">
                <i class="fas fa-user-edit"></i> Editar Datos
                </button>
                </form>
                </div>    
                <div class="col-md-6">
                <form method="post" action="<?php echo RUTA_PRESENTACION; ?>">
                <input type="hidden" name="id_presentacion" value="<?php echo $miembro->getId(); ?>">
                <button class="boton_presentacion btn-primary" type="submit" name="presentacion">
                <i class="fas fa-chalkboard-teacher"></i> Presentación
                </button>
                </form>
                </div>
            </div><br>
                 <div class="row">
                        <div class="col-md-12 py-1 border bg-light">
                            Presentación:
                        </div>
                 </div>
                 <div class="row">
                        <div class="col-md-12 py-1 border bg-light text-left">
                            <?php 
                            if(isset($presentacion)){
                            echo nl2br($presentacion->getPresentacion());    
                            }else{
                            echo "No ha escrito su presentación";
                            }
                            ?>
                        </div>
                 </div><br>
                <div class="row justify-content-center">
                <div class="col-md-6">
                <form method="post" action="<?php echo RUTA_EDITAR_PRESENTACION; ?>">
                <input type="hidden" name="id_presentacion" value="<?php echo $presentacion->getId(); ?>">
                <button class="boton_editar_presentacion btn-primary mb-2" type="submit" name="editar_presentacion">
                <i class="fas fa-user-edit"></i> Editar Presentación
                </button>
                </form>
                </div>
                </div>
        </div>
        
</div>

<?php
include_once 'plantillas/fin.php';
