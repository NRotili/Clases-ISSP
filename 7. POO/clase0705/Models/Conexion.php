<?php

class Conexion {
    
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "issp2026";
    public $conexion;
    
    public function conectar(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    }

}