<?php

require_once __DIR__ . '/../Models/Ciudad.php';

$nombre = $_POST['nombre'];
$cod_postal = $_POST['cod_postal'];
$id_provincia = $_POST['id_provincia'];


$ciudad = new Ciudad();
$ciudad->nombre = $nombre;
$ciudad->cod_postal = $cod_postal;
$ciudad->id_provincia = $id_provincia;
$ciudad->crear();