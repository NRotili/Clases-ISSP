<?php

// require_once __DIR__ . '/../Model/Cliente.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fecnac = $_POST['fecnac'];
$edad = $_POST['edad'];
$id_ciudad = $_POST['id_ciudad'];

echo $id_ciudad;

$cliente = new Cliente();
$cliente->nombre = $nombre;
$cliente->apellido = $apellido;
$cliente->fecnac = $fecnac;
$cliente->email = $email;
$cliente->edad = $edad;
$cliente->id_ciudad = $id_ciudad;
$cliente->crear();

echo "Cliente guardado";