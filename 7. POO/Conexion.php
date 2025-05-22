<?php

class Conexion
{
    protected $con;

    public function conectar()
    { 
        $this->con = mysqli_connect("localhost", "root", "", "poo");
    }
}
