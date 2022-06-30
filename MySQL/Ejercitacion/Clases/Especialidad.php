<?php

require_once 'Conexion.php';
require_once 'Medico.php';

class Especialidad extends Conexion{
    public $id, $codigo, $especialidad;
    
    public function medicos()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM medicos WHERE id_especialidad = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $resultado = $pre->get_result();
        $medicos = [];
        while ($medico = $resultado->fetch_object(Medico::class)) {
            array_push($medicos, $medico);
        }   
        return $medicos;
    }

    public static function getEspecialidadById($id)
    {
        $con = new Conexion;
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM especialidades WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $resultado = $pre->get_result();
        $especialidad = $resultado->fetch_object(Especialidad::class);
        return $especialidad;
    }

    
}