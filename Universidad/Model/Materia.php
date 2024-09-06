<?php

require_once 'Conexion.php';
require_once 'Alumno.php';
require_once 'Profesor.php';

class Materia extends Conexion {

    public $id, $nombre;

    public function create() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO materias (nombre) VALUES (?)");
        $pre->bind_param("s", $this->nombre);
        $pre->execute();
    }

    public static function all() {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materias ORDER BY nombre ASC");
        $result->execute();
        $valoresDb = $result->get_result();
        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) {
            $materias[] = $materia;
        }
        return $materias;
    }

    public static function getById($id) {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM materias WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $materia = $valorDb->fetch_object(Materia::class);
        return $materia;
    }

    public function profesores() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT * FROM profesores WHERE materia_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $profesores = [];
        while ($profesor = $valoresDb->fetch_object(Profesor::class)) {
            $profesores[] = $profesor;
        }
        return $profesores;
    }

    public function alumnos() {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT alumnos.* FROM alumnos INNER JOIN alumno_materia ON alumnos.id = alumno_materia.alumno_id WHERE alumno_materia.materia_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result();

        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) {
            $alumnos[] = $alumno;
        }

        return $alumnos;
    }

}