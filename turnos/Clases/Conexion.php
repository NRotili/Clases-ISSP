<?php

class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "turnos";
    private $con;

    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        // if ($this->con->connect_errno) {
        //     echo "Fallo al conectar a MySQL: (" . $this->con->connect_errno . ") " . $this->con->connect_error;
        // }
    }

    public function getConexion() {
        return $this->con;
    }
}
