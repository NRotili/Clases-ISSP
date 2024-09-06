<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Profesor extends Conexion {

    public $id, $nombre, $apellido, $materia_id;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesores (nombre, apellido, materia_id) VALUES (?, ?, ?)");
        $pre->bind_param("ssi", $this->nombre, $this->apellido, $this->materia_id);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores");
        $result->execute();
        $valoresDb = $result->get_result();
        $profesores = [];
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    }

    public function materia() {
        return Materia::getById($this->materia_id);
    }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM profesores WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $profesor = $valorDb->fetch_object(Profesor::class);
        return $profesor;
    }
}