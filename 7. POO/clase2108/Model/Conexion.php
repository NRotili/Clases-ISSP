<?php

class Conexion
{
    public $conexion;
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $database = "issp2025";

    public function conectar()
    { 
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }
}
