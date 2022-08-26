<?php

require_once './Clases/Conexion.php';

class Configuracion extends Conexion {

    public $apertura, $cierre, $dia, $rango;

    public static function getApertura($dia)
    {      
        $db = new Conexion();
        $pre = mysqli_prepare($db->getConexion(), "SELECT * FROM configuracion WHERE dia = ?");
        $pre->bind_param("i", $dia);
        $pre->execute();
        $resultado = $pre->get_result();
        $configuracion = $resultado->fetch_object(Configuracion::class);
        return $configuracion;
    }
    
}

