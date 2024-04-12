<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/validadorLogin.php';
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';

if(ControlSesion::sesionIniciada()){
    Redireccion::redirigir(SERVIDOR);
}

if(isset($_POST['login'])){
    conexion:: abrir_conexion();
    $validador= new ValidadorLogin($_POST['email'], $_POST['clave'], conexion::obtener_conexion());
    
    if($validador->getError() === '' && !is_null($validador->getMiembro())){
        ControlSesion::iniciarSesion($validador->getMiembro()-> getId(),
                $validador-> getMiembro()-> getNickname());
        Redireccion::redirigir(SERVIDOR);
    }
    
    $administrador= ControlSesion::sesionAdministrador($_POST['email'], $_POST['clave']);
    if($administrador){
        
        Redireccion::redirigir(ADMINISTRADOR);  
    }
    
    conexion::cerrar_conexion();
}

include_once 'plantillas/inicio.php';
include_once 'plantillas/navbar.php';
?>
<br>
<div class="container col-md-12 mb-3">
<div class="row justify-content-center">
    <div class="col-md-5 mb-3">
<form class="form-signin text-center" method="post" action="<?php echo RUTA_LOGIN ?>">
    <div class="col-md-12 mb-3" id="login">
  <img class="mb-4" src="img/perfil.jpg" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
    </div>
    
  <div class="col-md-12 mb-3">
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" name="email" class="form-control" placeholder="Dirección de Correo" 
         <?php 
            if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])){
            echo 'value="'.$_POST['email'].'"';
            }
         ?>
         required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
  </div>
    <div class="col-md-12">
                        <?php
                        if(isset($_POST['login'])){
                            $validador-> mostrarError();
                        }
                        ?>
    </div>
  <div class="col-md-12 mb-3">
  <button class="btn btn-lg btn-primary mb-4 btn-block" type="submit" name="login">Continuar</button>
  </div>
</form>
    </div>
</div>
</div>
<br><br>

<?php
include_once 'plantillas/fin.php';
