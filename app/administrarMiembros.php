<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';

class administrarMiembros{

    public static function recuperarMiembros() {
        $miembros = RepositorioMiembro::getTodos(conexion::obtener_conexion());

        if (count($miembros)) {
            foreach ($miembros as $miembro){
                self::recuperarMiembro($miembro);
            }
        }
    }
    
    public static function recuperarMiembro($miembro) {
        $miembro = RepositorioMiembro::getMiembroId(conexion::obtener_conexion(), $miembro->getId());
        
        if (!isset($miembro)) {
            return;
        }
        ?>  
        <table class="table table-striped">
        <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Plataforma</th>
                    <th>Nickname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $miembro->getId();?></td>
                    <td class="text-center"><?php echo $miembro->getNombre();?></td>
                    <td class="text-center"><?php echo $miembro->getApellido();?></td>
                    <td class="text-center"><?php $icon=$miembro->getPlataforma(); 
                            if($icon=='Xbox One'){
                             echo $icon= '<h3><i class="fab fa-xbox"></i><h/3>';
                            }
                            if($icon=='Play Station'){
                             echo $icon= '<h3><i class="fab fa-playstation"></i></h3>';
                            }
                            if($icon=='Nintendo'){
                             echo $icon= '<img class="mb-3" src="img/nintendo.jpg" width="35" height="35">';
                            }
                             if($icon=='PC'){
                             echo $icon= '<h3><i class="fas fa-laptop"></i></h3>';
                            }
                            if($icon=='Móvil'){
                             echo $icon= '<h3><i class="fas fa-mobile-alt"></i></h3>';
                            }
                            ?>
                    </td>
                    <td class="text-center"><?php echo $miembro->getNickname();?></td>
                    <td class="text-center"><?php echo $miembro->getEmail();?></td>
                </tr> 
            </tbody>
            <thead class="text-center">
                <tr>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Estado</th>
                    <th>Fecha Nac</th>
                    <th>Fecha Registro</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?php echo $miembro->getCiudad();?></td>
                    <td class="text-center"><?php echo $miembro->getPais();?></td>
                    <td class="text-center"><?php echo $miembro->getEstado(); ?> </td>
                    <td class="text-center"><?php echo $miembro->getFechaNac();?></td>
                    <td class="text-center"><?php echo $miembro->getFechaReg();?></td>
                    <td class="text-center"><?php echo $miembro->getActivo();?></td>
                </tr> 
            </tbody>
        </table>
        <form method="post" action="<?php echo RUTA_BORRAR ?>">
        <input type="hidden" name="id_borrar" value="<?php echo $miembro->getId(); ?>">
        <button class="boton_borrar btn btn-primary" type="submit" name="borrar_miembro">
         <i class="fas fa-user-minus"></i> Eliminar Miembro 
        </button>
        </form>
    <br>
    
      <?php
}
}
