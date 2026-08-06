<?php

require_once __DIR__ . '/../Models/Usuario.php';
# NOMBRE, DNI, EDAD Y PASSWORD

$nombre  = $_POST['nombre'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$password = $_POST['password'];

$usuario = new Usuario();
$usuario->nombre = $nombre;
$usuario->dni = $dni;
$usuario->edad = $edad;
$usuario->password = $password;
$usuario->crear();

header("Location: index.php");