<?php

require_once "conexion.php";

class Usuario extends Conexion
{
    
    public static function obtenerUsuario($usuario, $password){

        $conexion = new Conexion();
        $conexion->conectar();
        $preparacion = mysqli_prepare($conexion->conexion, "SELECT * FROM usuarios WHERE usuario = ? AND password = ?");
        $preparacion->bind_param("ss",$usuario, $password);
        $preparacion->execute();
        $resultado = $preparacion->get_result();

        if($resultado){
            //Entra a esta parte si resultado es != 0
            $usuario = $resultado->fetch_object(Usuario::class);
            return $usuario;
        }else{
            //Entra si resultado es 0
            return null;
        }
    }
}