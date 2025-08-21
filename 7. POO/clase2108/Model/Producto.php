<?php

include_once __DIR__ . '/../Model/Conexion.php';

class Producto extends Conexion {

    public $id, $nombre, $precio, $cantidad;

}