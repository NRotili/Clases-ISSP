<?php

require_once 'Conexion.php';

class Usuario extends Conexion{
    public $user;
    public $pass;
    public $email;
    public $id;

    public static function getUser($user, $pass){

        $con = new Conexion();
        $con->conectar();
        $pre = mysqli_prepare($con->con, "SELECT * FROM usuarios WHERE user = ? AND pass = ?") ;
        $pre->bind_param("ss", $user, $pass);
        $pre->execute();
        $resultado = $pre->get_result();
        if ($resultado) {
            $usuario = $resultado->fetch_object(Usuario::class);
            return $usuario;
        } else {
            return null;
        }

    }
}