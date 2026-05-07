<?php

class Conexion
{
    public $conexion;
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "login";

    public function conectar()
    { 
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
}
