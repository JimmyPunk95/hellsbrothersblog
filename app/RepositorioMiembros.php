<?php

class RepositorioMiembro {

    public static function getTodos($conexion) {
        $miembros = array();
        if (isset($conexion)) {
            try {
                include_once 'miembro.php';
                $sql = "SELECT * FROM miembros";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $miembros[] = new Miembro($fila['id'], $fila['nombre'], 
                        $fila['apellido'], $fila['plataforma'], $fila['nickname'],
                        $fila['email'], $fila['password'], $fila['ciudad'], $fila['pais'],
                        $fila['estado'], $fila['fechaNac'],
                        $fila['fechaReg'], $fila['activo']);
                    }
                } else {
                    print '<h1 class="text-center">No hay miembros</h1>';
                }
            } catch (Exception $ex) {
                print 'Error:' . $ex->getMessage();
            }
        }
        return $miembros;
    }

    public static function getNumeroMiembros($conexion) {
        $totalMiembros = null;
        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total FROM miembros";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                $totalMiembros = $resultado['total'];
            } catch (PDOException $ex) {
                print 'Error:' . $ex->getMessage();
            }
        }
        return $totalMiembros;
    }

    public static function insertarMiembro($conexion, $miembro) {
        $miembroInsertado = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO miembros(nombre, apellido, plataforma, nickname, email, password, ciudad, pais, estado, fechaNac, fechaReg, activo) VALUES(:nombre, :apellido, :plataforma, :nickname, :email, :password, :ciudad, :pais, :estado, :fechaNac, NOW(), 0)";
                $sentencia = $conexion->prepare($sql);

                $nombretemp = $miembro->getNombre();
                $apellidotemp = $miembro->getApellido();
                $plataformatemp = $miembro->getPlataforma();
                $nicknametemp = $miembro->getNickname();
                $emailtemp = $miembro->getEmail();
                $passwordtemp = $miembro->getPassword();
                $ciudadtemp = $miembro->getCiudad();
                $paistemp = $miembro->getPais();
                $estadotemp = $miembro->getEstado();
                $fechaNactemp = $miembro->getFechaNac();
                
                $sentencia->bindParam(':nombre', $nombretemp, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellidotemp, PDO::PARAM_STR);
                $sentencia->bindParam(':plataforma', $plataformatemp, PDO::PARAM_STR);
                $sentencia->bindParam(':nickname', $nicknametemp, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':password', $passwordtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':ciudad', $ciudadtemp, PDO::PARAM_STR);
                $sentencia->bindParam(':pais', $paistemp, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estadotemp, PDO::PARAM_STR);
                $sentencia->bindParam(':fechaNac', $fechaNactemp, PDO::PARAM_STR);

                $miembroInsertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $miembroInsertado;
    }
    
    public static function existeEmail($conexion, $email) {
        $existeEmail = true;

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM miembros WHERE email= :email";
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    $existeEmail = true;
                } else {
                    $existeEmail = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $existeEmail;
    }

    public static function getMiembroEmail($conexion, $email){
        $miembro= null;
        if(isset($conexion)){
            try{
                include_once 'miembro.php';
                $sql= "SELECT * FROM miembros WHERE email= :email";
                $sentencia= $conexion-> prepare($sql);
                $sentencia-> bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia-> execute();
                $resultado= $sentencia-> fetch();
                
                if(!empty($resultado)){
                    $miembro = new Miembro($resultado['id'], $resultado['nombre'], 
                        $resultado['apellido'], $resultado['plataforma'], $resultado['nickname'],
                        $resultado['email'], $resultado['password'], $resultado['ciudad'], $resultado['pais'],
                        $resultado['estado'], $resultado['fechaNac'], 
                        $resultado['fechaReg'], $resultado['activo']);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex-> getMessage();
            }
        }
        return $miembro;
    }
    
    public static function getMiembroId($conexion, $id){
        $miembro= null;
        if(isset($conexion)){
            try{
                include_once 'miembro.php';
                $sql= "SELECT * FROM miembros WHERE id= :id";
                $sentencia= $conexion-> prepare($sql);
                $sentencia-> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia-> execute();
                $resultado= $sentencia-> fetch();
                
                if(!empty($resultado)){
                    $miembro = new Miembro($resultado['id'], $resultado['nombre'], 
                        $resultado['apellido'], $resultado['plataforma'], $resultado['nickname'],
                        $resultado['email'], $resultado['password'], $resultado['ciudad'], $resultado['pais'],
                        $resultado['estado'], $resultado['fechaNac'],
                        $resultado['fechaReg'], $resultado['activo']);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex-> getMessage();
            }
        }
        return $miembro;
    }
    
    public static function actualizarMiembro($conexion, $id, $nombre, $apellido, $plataforma, 
            $nickname, $email, $ciudad, $pais, $estado, $fechaNac){
        $actualizacion=false;
        if(isset($conexion)){
            try{
                $sql="UPDATE miembros SET nombre=:nombre, apellido=:apellido, plataforma=:plataforma, nickname=:nickname, email=:email, ciudad=:ciudad, pais=:pais, estado=:estado, fechaNac=:fechaNac WHERE id = :id";
                
                $sentencia= $conexion->prepare($sql);
                $sentencia->bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':plataforma', $plataforma, PDO::PARAM_STR);
                $sentencia->bindParam(':nickname', $nickname, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':ciudad', $ciudad, PDO::PARAM_STR);
                $sentencia->bindParam(':pais', $pais, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_STR);
                $sentencia->bindParam(':fechaNac', $fechaNac, PDO::PARAM_STR);

                $sentencia->execute();
                $resultado= $sentencia->rowCount();
                
                if(count($resultado)){
                    $actualizacion=true;
                }else{
                    $actualizacion=false;
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $actualizacion;
    }
    
    public static function eliminarMiembro($conexion, $miembroId){
        if(isset($conexion)){
            try{
                $conexion->beginTransaction();
                
                $sql1="DELETE FROM presentacion WHERE miembro_id = :miembro_id";
                $sentencia1= $conexion->prepare($sql1);
                $sentencia1-> bindParam(':miembro_id', $miembroId, PDO::PARAM_STR);
                $sentencia1-> execute();
                
                $sql2="DELETE FROM miembros WHERE id = :id";
                $sentencia2= $conexion->prepare($sql2);
                $sentencia2-> bindParam(':id', $miembroId, PDO::PARAM_STR);
                $sentencia2-> execute();
                
                $conexion->commit(); 
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
                $conexion->rollBack();
            }
        }
    }
}
