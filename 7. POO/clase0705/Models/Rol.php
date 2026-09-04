<?php

require_once __DIR__ . '/../Models/Conexion.php';
require_once __DIR__ . '/../Models/Usuario.php';

class Rol extends Conexion { 

    public $id, $nombre;

    public function usuarios() {
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "SELECT * FROM usuarios WHERE id IN (SELECT id_usuario FROM rol_usuario WHERE id_rol = ?)");
        $preparacion->bind_param("i", $this->id);
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();

        $usuarios = [];
        while ($usuario = $resultadoDeLaBusqueda->fetch_object(Usuario::class)){
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

}