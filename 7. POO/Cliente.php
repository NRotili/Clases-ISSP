<?php
include_once 'Conexion.php';
class Cliente extends Conexion
{

    public $id, $nombre, $apellido, $fecnac, $email, $edad;
    public function crear()
    {
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO clientes (nombre, apellido, fecnac, email, edad) VALUES (?, ?, ?, ?, ?)");
        $preparacion->bind_param("ssssi", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad);
        $preparacion->execute();
    }

    //Update
    public function actualizar()
    {
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "UPDATE clientes SET nombre = ?, apellido = ?, fecnac = ?, edad = ?, email = ?");
        $preparacion->bind_param("sssss", $this->nombre, $this->apellido, $this->fecnac, $this->edad, $this->email);
        $preparacion->execute();
    }

    //Delete
    public function eliminar()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM clientes WHERE email = ?");
        $pre->bind_param("s", $this->email);
        $pre->execute();
    }

    //Read
    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM clientes");
        $pre->execute();
        $res = $pre->get_result();

        $clientes = array();
        while ($cliente = $res->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }

        return $clientes;
    }

    //Obtener cliente por id
    public static function obtenerPorId($id)
    {
        // SELECT * FROM `clientes` WHERE `id` = 1
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM clientes WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultado = $preparacion->get_result(); //nombre, apellido, email, fecnac, edad
 
        return $resultado->fetch_object(Cliente::class); //devolve a quien me invocó el objeto del tipo cliente.
    }
}
