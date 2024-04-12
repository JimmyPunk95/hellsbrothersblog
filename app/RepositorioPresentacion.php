<?php

include_once 'app/config.php';
include_once 'app/conexion.php';
include_once 'app/presentacion.php';

class RepositorioPresentacion{
    
    public static function insertarPresentacion($conexion, $presentacion) {
        $presentacionInsertada = false;
        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO presentacion (miembro_id, presentacion, fecha, activa) VALUES(:miembro_id, :presentacion, NOW(), 0)";
                $sentencia = $conexion->prepare($sql);

                $miembrotemp = $presentacion->getMiembroId();
                $presentaciontemp = $presentacion->getPresentacion();
                
                $sentencia->bindParam(':miembro_id', $miembrotemp, PDO::PARAM_STR);
                $sentencia->bindParam(':presentacion', $presentaciontemp, PDO::PARAM_STR);

                $presentacionInsertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $presentacionInsertada;
    }
    
    public static function actualizarPresentacion($conexion, $miembroId, $presentacion){
        $actualizacion=false;
        if(isset($conexion)){
            try{
                $sql="UPDATE presentacion SET presentacion = :presentacion WHERE miembro_id = :miembro_id";
                $sentencia= $conexion->prepare($sql);
                $sentencia->bindParam(':presentacion', $presentacion, PDO::PARAM_STR);
                $sentencia->bindParam(':miembro_id', $miembroId, PDO::PARAM_STR);
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
    
    public static function getPresentacionId($conexion, $id){
        $presentacion= null;
        
        if(isset($conexion)){
            try{
                $sql="SELECT * FROM presentacion WHERE id = :id";
                $sentencia = $conexion->prepare($sql);
                $sentencia-> bindParam(':id', $id, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado= $sentencia-> fetch();
                
                if(!empty($resultado)){
                    $presentacion= new Presentacion(
                            $resultado['id'], $resultado['miembro_id'],
                            $resultado['presentacion'], $resultado['fecha'],
                            $resultado['activa']);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $presentacion;
    }
    
     public static function getPresentacionMiembroId($conexion, $miembroId){
        $presentacion= null;
        
        if(isset($conexion)){
            try{
                $sql="SELECT * FROM presentacion WHERE miembro_id = :miembro_id";
                $sentencia = $conexion->prepare($sql);
                $sentencia-> bindParam(':miembro_id', $miembroId, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado= $sentencia-> fetch();
                
                if(!empty($resultado)){
                    $presentacion= new Presentacion(
                            $resultado['id'], $resultado['miembro_id'],
                            $resultado['presentacion'], $resultado['fecha'],
                            $resultado['activa']);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $presentacion;
    }
    
    public static function getTodas($conexion){
        $presentaciones=[];
        
        if(isset($conexion)){
            try{
                $sql="SELECT * FROM presentacion";
                 $sentencia = $conexion->prepare($sql);
                 $sentencia->execute();
                 $resultado= $sentencia-> fetchAll();
                 
                 if(count($resultado)){
                     foreach ($resultado as $fila){
                         $presentaciones[]= new Presentacion(
                                 $fila['id'], $fila['miembro_id'],
                                 $fila['presentacion'], $fila['fecha'], $fila['activa']
                                 );
                     }
                 }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $presentaciones;
    }
}
