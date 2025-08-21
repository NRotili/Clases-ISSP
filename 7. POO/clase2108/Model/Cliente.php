<?php
include_once __DIR__ . '/../Model/Conexion.php';
include_once __DIR__ . '/../Model/Ciudad.php';
include_once __DIR__ . '/../Model/Producto.php';
class Cliente extends Conexion
{
    public $id, $nombre, $apellido, $fecnac, $email, $edad, $id_ciudad;

    public function ciudad(){
        // return "hola";
        //Tengo q buscar una ciudad por su ID
        return Ciudad::obtenerPorId($this->id_ciudad);
        
    }

    public function productos(){
        $this->conectar();
        $preparar = mysqli_prepare($this->conexion, "SELECT * FROM productos INNER JOIN cliente_producto ON productos.id = cliente_producto.id_producto WHERE cliente_producto.id_cliente = ?");
        $preparar->bind_param("i", $this->id);
        $preparar->execute();

        $resultado = $preparar->get_result();

        $productos = array();
        while ($producto = $resultado->fetch_object(Producto::class)) {
            array_push($productos, $producto);
        }
        return $productos;
    }


    public function crear()
    {

        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "INSERT INTO clientes (nombre, apellido, fecnac, email, edad) VALUES (?, ?, ?, ?, ?)");
        $preparacion->bind_param("ssssi" , $this->nombre, $this->apellido, $this->fecnac, $this->email, $this->edad);
        $preparacion->execute();

        // echo "Cliente creado exitosamente.<br>";
    }

    //Update
    public function actualizar()
    {
        $this->conectar();
        $preparacion = mysqli_prepare($this->conexion, "UPDATE clientes SET nombre = ?, apellido = ?, fecnac = ?, edad = ?, email = ? WHERE id = ?");
        $preparacion->bind_param("sssisi", $this->nombre, $this->apellido, $this->fecnac, $this->edad, $this->email, $this->id);
        $preparacion->execute();
    }

    //Delete
    public function eliminar()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->conexion, "DELETE FROM clientes WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
        echo "Cliente eliminado exitosamente.<br>";
    }

    //Read
    public static function todos()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $preparacion = mysqli_prepare($conexion->conexion, "SELECT * FROM clientes");
        $preparacion->execute();
        $resultado = $preparacion->get_result();

        $clientes = array();
        while ($cliente = $resultado->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }
        return $clientes;
    }

    //Obtener cliente por id
    public static function obtenerPorId($id)
    {
        $conexionAMysql = new Conexion();
        $conexionAMysql->conectar();
        $preparacion = mysqli_prepare($conexionAMysql->conexion, "SELECT * FROM clientes WHERE id = ?");
        $preparacion->bind_param("i", $id);
        $preparacion->execute();
        $resultado = $preparacion->get_result(); //nombre, apellido, email, fecnac, edad
 
        return $resultado->fetch_object(Cliente::class); //devolve a quien me invocó el objeto del tipo cliente.
    }
}
