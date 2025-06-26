<?php

class Conexion
{
    public $conexion;

    public function conectar()
    { 
        $this->conexion = mysqli_connect("localhost", "root", "", "issp2025");
    }
}
