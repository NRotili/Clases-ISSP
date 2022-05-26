<?php

class Conexion {
    private $host = "localhost";
    private $user = "roo";
    private $pass = "";
    private $db = "apunte8";
    public $con;
    
    public function conectar() {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }
}