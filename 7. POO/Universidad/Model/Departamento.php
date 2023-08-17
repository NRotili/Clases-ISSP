<?php

class Departamento extends Conexion {

    public $id;
    public $nombre;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO departamento (nombre) VALUES (?)");
        $pre->bind_param("s", $this->nombre);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE departamento SET nombre = ? WHERE id = ?");
        $pre->bind_param("si", $this->nombre, $this->id);
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM departamento WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM departamento");
        $pre->execute();
        $res = $pre->get_result();

        $departamentos = array();
        while ($departamento = $res->fetch_object(Departamento::class)) {
            array_push($departamentos, $departamento);
        }

        return $departamentos;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM departamento WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $departamento = $res->fetch_object(Departamento::class);

        return $departamento;
    }

    //departamento->profesores()
    public function profesores()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "SELECT * FROM profesor WHERE id_departamento = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        $res = $pre->get_result();

        $profesores = array();
        while ($profesor = $res->fetch_object(Profesor::class)) {
            array_push($profesores, $profesor);
        }

        return $profesores;
    }


}