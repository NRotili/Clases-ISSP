<?php

include 'Conexion.php';

class Paciente extends Conexion
{

    public $nombre, $apellido, $fecnac, $id;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO pacientes (nombre, apellido, fecnac) VALUES (?, ?, ? )");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fecnac);
        $pre->execute();
    }

    public static function all()
    {
        $con = new Conexion();
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM pacientes");
        $pre->execute();
        $resultado = $pre->get_result();
        $pacientes = [];
        while ($paciente = $resultado->fetch_object(Paciente::class)) {
            array_push($pacientes, $paciente);
        }
        return $pacientes;
    }

    public function update(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE pacientes SET nombre = ?, apellido = ?, fecnac = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fecnac, $this->id);
        $pre->execute();
        
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM pacientes WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function getById($id)
    {
        $con = new Conexion();
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM pacientes WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $resultado = $pre->get_result();
        $paciente = $resultado->fetch_object(Paciente::class);
        return $paciente;
    }


}
