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
    

    //Many to many table Medicos
    public function medicos()
    {
        $con = new Conexion();
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM medicos WHERE id IN (SELECT id_medico FROM medico_paciente WHERE id_paciente = ?)");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $resultado = $pre->get_result();
        $medicos = [];
        while ($medico = $resultado->fetch_object(Medico::class)) {
            array_push($medicos, $medico);
        }
        return $medicos;
    }


}
