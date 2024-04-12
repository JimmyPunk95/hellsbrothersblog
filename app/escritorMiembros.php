<?php
include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/miembro.php';
include_once 'app/RepositorioMiembros.php';
include_once 'app/escritorPresentaciones.php';

class EscritorMiembros {

    public static function escribirMiembros() {
        $miembros = RepositorioMiembro::getTodos(conexion::obtener_conexion());

        if (count($miembros)) {
            foreach ($miembros as $miembro){
                self::escribirMiembro($miembro);
            }
        }
    }
    
    public static function escribirMiembro($miembro) {
        $miembro = RepositorioMiembro::getMiembroId(conexion::obtener_conexion(), $miembro->getId());
        
        if (!isset($miembro)) {
            return;
        }
        ?>  
        <table class="table table-striped">
        <thead class="text-center">
                <tr>
                    <th colspan="2">Nickname</th>
                    <th colspan="2">Plataforma</th> 
                </tr>
            </thead> 
            <tbody>
                <tr>
                    <td colspan="2" class="text-center"><b><?php echo $miembro->getNickname();?></b></td>
                    <td colspan="2" class="text-center"><?php $icon=$miembro->getPlataforma(); 
                            if($icon=='Xbox One'){
                             echo $icon= '<h4><i class="fab fa-xbox"></i></h4>';
                            }
                            if($icon=='Play Station'){
                             echo $icon= '<h4><i class="fab fa-playstation"></i></h4>';
                            }
                            if($icon=='Nintendo'){
                             echo $icon= '<img class="mb-3" src="img/nintendo.jpg" width="30" height="30">';
                            }
                             if($icon=='PC'){
                             echo $icon= '<h4><i class="fas fa-laptop"></i></h4>';
                            }
                            if($icon=='Móvil'){
                             echo $icon= '<h4><i class="fas fa-mobile-alt"></i></h4>';
                            }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" class="text-center"><?php $miembro->getId();?>
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
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">Presentación</th>
                </tr>
                <tr>
                <td colspan="4" class="text-justify"><?php EscritorPresentaciones::escribirPresentacion($miembro->getId()) ?> </td>
                </tr>
            </tbody>
        </table>
        <br>
      <?php
}
}
    