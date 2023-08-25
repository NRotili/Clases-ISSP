<?php

require_once __DIR__ . '/../Model/Conexion.php';
require_once __DIR__ . '/../Model/Asignatura.php';


class Alumno extends Conexion {
    public $id;
    public $nif;
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $ciudad;
    public $direccion;
    public $telefono;
    public $fecha_nacimiento;
    public $sexo;
    public $id_asignaturas;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumno (nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $pre->bind_param("sssssssss", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo);
        $pre->execute();

        $alumno = $this->getByNif($this->nif);
        $this->id = $alumno->id;

        foreach ($this->id_asignaturas as $id_asignatura) {
            $pre = mysqli_prepare($this->con, "INSERT INTO alumno_se_matricula_asignatura (id_alumno, id_asignatura, id_curso_escolar) VALUES (?, ?, 4)");
            $pre->bind_param("ii", $this->id, $id_asignatura);
            $pre->execute();
        }
        
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nif = ?, nombre = ?, apellido1 = ?, apellido2 = ?, ciudad = ?, direccion = ?, telefono = ?, fecha_nacimiento = ?, sexo = ? WHERE id = ?");
        $pre->bind_param("sssssssssi", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo, $this->id);
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
        $pre->execute();
        $res = $pre->get_result();

        $alumnos = array();
        while ($alumno = $res->fetch_object(Alumno::class)) {
            array_push($alumnos, $alumno);
        }

        return $alumnos;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumno WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $alumno = $res->fetch_object(Alumno::class);

        return $alumno;
    }

    public static function getByNif($nif)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM alumno WHERE nif = ?");
        $pre->bind_param("s", $nif);
        $pre->execute();
        $res = $pre->get_result();

        $alumno = $res->fetch_object(Alumno::class);

        return $alumno;
    }

    //asignaturas
    public function asignaturas()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT asignatura.* FROM asignatura INNER JOIN alumno_se_matricula_asignatura ON asignatura.id = alumno_se_matricula_asignatura.id_asignatura WHERE alumno_se_matricula_asignatura.id_alumno = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $res = $pre->get_result();

        $asignaturas = array();
        while ($asignatura = $res->fetch_object(Asignatura::class)) {
            array_push($asignaturas, $asignatura);
        }

        return $asignaturas;
    }

}