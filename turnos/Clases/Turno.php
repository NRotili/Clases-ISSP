<?php

require_once './Clases/Conexion.php';

class Turno extends Conexion {

    public $fecha;
    public $hora;
    public $id_cliente;

    public static function getTurnosByFechaAndHour($fecha, $hora)
    {
        $db = new Conexion();
        $pre = mysqli_prepare($db->getConexion(), "SELECT * FROM turnos WHERE fecha = ? AND hora = ?");
        $pre->bind_param("ss", $fecha, $hora);
        $pre->execute();
        $resultado = $pre->get_result();
        if ($resultado) {
            $turnos = $resultado->fetch_object(Turno::class);
            return $turnos;
            
        }else {
            return null;
        }
    }

    //Guardar turno
    public function crearTurno()
    {
        $db = $this->getConexion();
        $pre = mysqli_prepare($db, "INSERT INTO turnos (fecha, hora, id_cliente) VALUES (?, ?, ?)");
        $pre->bind_param("ssi", $this->fecha, $this->hora, $this->id_cliente);

        $pre->execute();

    }

}