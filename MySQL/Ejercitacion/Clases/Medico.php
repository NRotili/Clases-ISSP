<?php

require_once 'Conexion.php';
require_once 'Especialidad.php';


class Medico extends Conexion {

    public $id, $matricula, $nombre, $apellido, $id_especialidad;

    
    public static function getMedicoById($id)
    {
        $con = new Conexion;
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM medicos WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $resultado = $pre->get_result();
        $medico = $resultado->fetch_object(Medico::class);
        return $medico;
    }

    //Relaciones

    public function especialidad()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM especialidades WHERE id = ?");
        $pre->bind_param("i", $this->id_especialidad);
        $pre->execute();
        $resultado = $pre->get_result();
        $especialidad = $resultado->fetch_object(Especialidad::class);
        return $especialidad;
    }


    public function pacientes()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM pacientes WHERE id IN (SELECT id_paciente FROM medico_paciente WHERE id_medico = ?)");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $resultado = $pre->get_result();
        $pacientes = [];
        while ($paciente = $resultado->fetch_object(Paciente::class)) {
            array_push($pacientes, $paciente);
        }
        return $pacientes;
    }
}