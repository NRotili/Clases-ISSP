<?php
require_once 'Conexion.php';
class Usuario extends Conexion {
    
    public $id, $user, $pass;

    public function crear(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO usuarios (user, pass) VALUES (?, ?)");
        $preparacion->bind_param("ss", $this->user, $this->pass);
        $preparacion->execute();

    }

}