<?php

require_once 'Conexion.php';

class Usuario extends Conexion {

    #Atributos
    public $id, $nombre, $dni, $edad, $password;
    #Métodos
    //CRUD o ABM
    public function crear(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO `usuarios` (`nombre`, `dni`, `edad`, `password`) VALUES (?, ?, ?, ?)");
        $preparacion->bind_param("ssis", $this->nombre, $this->dni, $this->edad, $this->password);
        $preparacion->execute();
    }

    //DELETE FROM usuarios WHERE `usuarios`.`id` = 9
    public function eliminar(){
        $this->conectar();
        
    }


}