<?php
require_once __DIR__ . '/../Models/Conexion.php';

class Ciudad extends Conexion
{

    public $id, $cod_postal, $nombre;

    public static function obtenerPorId($id)
    {
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM ciudades WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();
        return $resultadoDeLaBusqueda->fetch_object(Ciudad::class);
    }

    public function usuarios() {
        $this->conectar();
        $prepararMySQL = mysqli_prepare($this->conexion, "SELECT * FROM usuarios WHERE id_ciudad = ?");
        $prepararMySQL->bind_param("i", $this->id);
        $prepararMySQL->execute();
        $resultado = $prepararMySQL->get_result();
        $usuarios = array();
        while ($usuario = $resultado->fetch_object(Usuario::class)){
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }
}
