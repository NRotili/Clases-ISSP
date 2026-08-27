<?php

require_once __DIR__ . '/../Models/Conexion.php';
require_once __DIR__ . '/../Models/Ciudad.php';

class Provincia extends Conexion {

    public $id, $nombre;

    public function ciudades(){
        $this->conectar();
        $prepararMySQL = mysqli_prepare($this->conexion, "SELECT * FROM ciudades WHERE id_provincia = ?");
        $prepararMySQL->bind_param("i", $this->id);
        $prepararMySQL->execute();
        $resultado = $prepararMySQL->get_result();
        $ciudades = array();
        while ($ciudad = $resultado->fetch_object(Ciudad::class)){
            array_push($ciudades, $ciudad);
        }
        return $ciudades;
    }

    public static function obtenerPorId($id){
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM provincias WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();
        return $resultadoDeLaBusqueda->fetch_object(Provincia::class);
    }

}