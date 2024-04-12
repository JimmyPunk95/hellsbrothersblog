<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/Redireccion.php';

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
<style>
        #rc {
        padding-top: 4rem;
        }
        
        #jumbotron{
            background-color: red;
            color: white;
        }
        
    </style>
    
<div class="container" id="rc">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron text-center" id="jumbotron">
                    <h1>¡Registro Correcto!</h1> 
                    <h2>¡Gracias por registrarte <b><?php echo $nombre ?></b>!</h2>
                    <h2>¡Ahora eres parte del Team HB!</h2>
                    <br>
                    <p>Para continuar con el registro haga clic en</p><br>
                    <form id="boton_iniciar" action="<?php echo RUTA_LOGIN ?>">
                    <input class="btn btn-primary" type="submit" value="Iniciar Sesión" />
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

<?php
include_once 'plantillas/fin.php';