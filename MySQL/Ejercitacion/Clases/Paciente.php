<?php

require_once 'Conexion.php';
require_once 'Medico.php';

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

    //Obtengo paciente por ID static
    public static function getPacienteById($id)
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

    //Actualizo paciente
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE pacientes SET nombre = ?, apellido = ?, fechanacimiento = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fechanacimiento, $this->id);
        $pre->execute();
    }

    //Borro paciente
    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM pacientes WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    //Many to many table Medicos
    public function medicos()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM medicos WHERE id IN (SELECT medico_id FROM medico_paciente WHERE paciente_id = ?)");
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
