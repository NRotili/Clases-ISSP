<?php

require_once __DIR__ . '/../Model/Conexion.php';

class Profesor extends Conexion {

    //id, nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo, id_departamento
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
    public $id_departamento;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO profesor (nif, nombre, apellido1, apellido2, ciudad, direccion, telefono, fecha_nacimiento, sexo, id_departamento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $pre->bind_param("sssssssssi", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo, $this->id_departamento);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE profesor SET nif = ?, nombre = ?, apellido1 = ?, apellido2 = ?, ciudad = ?, direccion = ?, telefono = ?, fecha_nacimiento = ?, sexo = ?, id_departamento = ? WHERE id = ?");
        $pre->bind_param("sssssssssii", $this->nif, $this->nombre, $this->apellido1, $this->apellido2, $this->ciudad, $this->direccion, $this->telefono, $this->fecha_nacimiento, $this->sexo, $this->id_departamento, $this->id);
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM profesor WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesor");
        $pre->execute();
        $res = $pre->get_result();

        $profesores = array();
        while ($profesor = $res->fetch_object(Profesor::class)) {
            array_push($profesores, $profesor);
        }

        return $profesores;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesor WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $profesor = $res->fetch_object(Profesor::class);

        return $profesor;
    }

    //getByNif
    public static function getByNif($nif)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM profesor WHERE nif = ?");
        $pre->bind_param("s", $nif);
        $pre->execute();
        $res = $pre->get_result();

        $profesor = $res->fetch_object(Profesor::class);

        return $profesor;
    }

    //profesor->departamento()
    public function departamento()
    {
        return Departamento::getById($this->id_departamento);
    }

}