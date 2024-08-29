<?php

class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "issp";
    public $con;

    public function conectar() {
       $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if ($this->con->connect_errno) {
            echo "Error al conectar a la base de datos: " . $this->con->connect_error;
        }
    }

}

