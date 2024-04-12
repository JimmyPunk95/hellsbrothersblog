<?php
include_once 'app/controlSesion.php';
include_once 'app/config.php';

conexion::abrir_conexion();
$totalUsuarios = RepositorioMiembro::getNumeroMiembros(conexion::obtener_conexion());

?>
<nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo SERVIDOR ?>">
      <i class="fab fa-gripfire"></i> Hell's Brothers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo RUTA_MIEMBROS ?>"><i class="fas fa-users"></i> Miembros<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_SORTEOS ?>"><i class="fas fa-gift"></i> Sorteos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_TORNEOS ?>"><i class="fas fa-trophy"></i> Torneos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="<?php echo RUTA_CONTACTO ?>"><i class="fas fa-address-book"></i> Contacto</a>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-rigth">
          <?php
            if (ControlSesion::sesionIniciada()) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_PERFIL ?>">
                <i class="fas fa-user"></i> 
                    <?php echo ' ' . $_SESSION['nicknameMiembro']; ?>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_LOGOUT ?>">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
            </a>
          </li>
          <?php
            } else {
            ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_LOGIN ?>"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA_REGISTRO ?>"><i class="fas fa-user-plus"></i> Registrarse</a>
      </li>
      <?php
       }
      ?>
      </ul>
  </div>
</nav>
