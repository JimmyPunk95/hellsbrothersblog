<?php
include_once 'app/controlSesion.php';
include_once 'app/Redireccion.php';
include_once 'app/config.php';

ControlSesion::cerrarSesion();
Redireccion::redirigir(SERVIDOR);
