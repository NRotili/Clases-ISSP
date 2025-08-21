<?php
include_once __DIR__ . '/../Model/Conexion.php';
include_once __DIR__ . '/../Model/Provincia.php';

class Ciudad extends Conexion {

    //Atributos
    public $id, $cod_postal, $nombre, $id_provincia;

    public function provincia(){
        return Provincia::obtenerPorId($this->id_provincia);
    }

    //Obtener todos los clientes que pertenecen a una ciudad
    public function clientes(){

        $this->conectar();
        $preparar = mysqli_prepare($this->conexion, "SELECT * FROM clientes WHERE id_ciudad = ?");
        $preparar->bind_param("i", $this->id);
        $preparar->execute();

        $resultado = $preparar->get_result();

        $clientes = array();
        while ($cliente = $resultado->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }
        return $clientes;


    }

    //Métodos
    public static function obtenerPorId($id)
    {
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM ciudades WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultado = $preparacion->get_result();
 
        return $resultado->fetch_object(Ciudad::class); //devolve a quien me invocó el objeto del tipo cliente.
    }


}