<?php
require_once __DIR__ . '/../Models/Conexion.php';
require_once __DIR__ . '/../Models/Provincia.php';

class Ciudad extends Conexion
{

    public $id, $cod_postal, $nombre, $id_provincia;

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

    public function provincia(){
        return Provincia::obtenerPorId($this->id_provincia);
    }

    public static function obtenerTodos(){
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM ciudades");
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();

        $ciudades = [];
        while ($ciudad = $resultadoDeLaBusqueda->fetch_object(Ciudad::class)){
            array_push($ciudades, $ciudad);
        }

        return $ciudades;
    }

    public function crear(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO `ciudades` (`nombre`, `cod_postal`, `id_provincia`) VALUES (?, ?, ?)");
        $preparacion->bind_param("ssi", $this->nombre, $this->cod_postal, $this->id_provincia);
        $preparacion->execute();
    }
}
