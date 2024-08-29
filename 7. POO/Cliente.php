<?php
include_once 'Conexion.php';
class Cliente extends Conexion
{

    public $id, $nombre, $apellido, $fecnac, $email, $edad;

    //Create
    public function create()
    {
    
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO clientes (nombre, apellido, fecnac, email, edad) VALUES (?, ?, ?, ?, ?)");
        $pre->bind_param("ssssi", $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad);
        $pre->execute();
    }
    
    //Update
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE clientes SET nombre = ?, apellido = ?, fecnac = ?, edad = ?, email = ? WHERE id = ?");
        $pre->bind_param("ssss", $this->nombre, $this->apellido, $this->fecnac, $this->edad, $this->email, $this->id);
        $pre->execute();
    }

    //Delete
    public function delete()
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
    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM clientes WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result(); //nombre, apellido, email, fecnac, edad

        return $res->fetch_object(Cliente::class); //devolve a quien me invocó el objeto del tipo cliente.
    }
}
