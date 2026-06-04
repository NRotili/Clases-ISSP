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
        $preparacion = mysqli_prepare($this->conexion, "DELETE FROM usuarios WHERE id = ?");
        $preparacion->bind_param("i", $this->id);
        $preparacion->execute();
    }

    //UPDATE usuarios SET nombre = ?, edad = ?, password = ?, dni = ? WHERE id = ?;
    public function actualizar(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "UPDATE usuarios SET nombre = ?, edad = ?, password = ?, dni = ? WHERE id = ?");
        $preparacion->bind_param("sissi", $this->nombre, $this->edad, $this->password, $this->dni, $this->id);
        $preparacion->execute();
    }

    public static function obtenerPorId($id){
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM usuarios WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();
        return $resultadoDeLaBusqueda->fetch_object(Usuario::class);
    }


}