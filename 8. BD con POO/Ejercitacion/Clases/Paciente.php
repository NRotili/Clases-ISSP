<?php

include 'Conexion.php';

class Paciente extends Conexion
{

    public $nombre, $apellido, $fechanacimiento, $id;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO pacientes (nombre, apellido, fechanacimiento) VALUES (?, ?, ? )");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fechanacimiento);
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

}
