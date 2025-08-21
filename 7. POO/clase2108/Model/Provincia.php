<?php

include_once __DIR__ . '/../Model/Conexion.php';

class Provincia extends Conexion {

    public $id, $nombre;

     public static function obtenerPorId($id)
    {
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM provincias WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultado = $preparacion->get_result();
 
        return $resultado->fetch_object(Provincia::class); //devolve a quien me invocó el objeto del tipo cliente.
    }

}