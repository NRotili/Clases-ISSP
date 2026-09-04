<?php
// C:\xampp\htdocs\Clases-ISSP\7. POO\clase0705\Controllers
require_once __DIR__ . '/../Models/Conexion.php';
require_once __DIR__ . '/../Models/Ciudad.php';
require_once __DIR__ . '/../Models/Rol.php';
// require_once 'Conexion.php';

class Usuario extends Conexion {

    #Atributos
    public $id, $nombre, $dni, $edad, $password, $id_ciudad;

    #Métodos
    //CRUD o ABM
    public function crear(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO `usuarios` (`nombre`, `dni`, `edad`, `password`, `id_ciudad`) VALUES (?, ?, ?, ?, ?)");
        $preparacion->bind_param("ssisi", $this->nombre, $this->dni, $this->edad, $this->password, $this->id_ciudad);
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
        $preparacion = mysqli_prepare($this->conexion, "UPDATE usuarios SET nombre = ?, edad = ?, password = ?, dni = ?, id_ciudad = ? WHERE id = ?");
        $preparacion->bind_param("sissii", $this->nombre, $this->edad, $this->password, $this->dni, $this->id_ciudad, $this->id);
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

    public static function obtenerTodos(){
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM usuarios");
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();

        $usuarios = [];
        while ($usuario = $resultadoDeLaBusqueda->fetch_object(Usuario::class)){
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

    public function ciudad(){
        $ciudad = Ciudad::obtenerPorId($this->id_ciudad);
        return  $ciudad;
       
    }

    public function roles(){
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "SELECT * FROM roles WHERE id IN (SELECT id_rol FROM rol_usuario WHERE id_usuario = ?)");
        $preparacion->bind_param("i", $this->id);
        $preparacion->execute();
        $resultadoDeLaBusqueda = $preparacion->get_result();

        $roles = [];
        while ($rol = $resultadoDeLaBusqueda->fetch_object(Rol::class)){
            array_push($roles, $rol);
        }

        return $roles;
    }


}