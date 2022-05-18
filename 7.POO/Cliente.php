<?php
include_once 'Conexion.php';
class Cliente extends Conexion
{

    public $nombre, $apellido, $fecnac, $email;

    //Create
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO clientes (nombre, apellido, fecnac, email) VALUES (?, ?, ?, ?)");
        $pre->bind_param("ssss", $this->nombre, $this->apellido, $this->fecnac, $this->email);
        $pre->execute();
    }

    //Update
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE clientes SET nombre = ?, apellido = ?, fecnac = ? WHERE email = ?");
        $pre->bind_param("ssss", $this->nombre, $this->apellido, $this->fecnac, $this->email);
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

    //Obtener cliente por correo
    public static function getByEmail($email)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM clientes WHERE email = ?");
        $pre->bind_param("s", $email);
        $pre->execute();
        $res = $pre->get_result();

        return $res->fetch_object(Cliente::class);
    }
}
