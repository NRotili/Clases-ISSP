<?php
require_once __DIR__ . '/../Model/Conexion.php';

class Asignatura extends Conexion {

    //all()
    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM asignatura");
        $pre->execute();
        $res = $pre->get_result();

        $asignaturas = array();
        while ($asignatura = $res->fetch_object(Asignatura::class)) {
            array_push($asignaturas, $asignatura);
        }

        return $asignaturas;
    }


}