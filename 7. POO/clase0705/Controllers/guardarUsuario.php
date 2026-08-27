<?php

require_once __DIR__ . '/../Models/Usuario.php';
# NOMBRE, DNI, EDAD Y PASSWORD

// POST, GET, SERVER, COOKIE, SON TODAS VARIABLES SUPERGLOBALES.

$nombre  = $_POST['nombre'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$password = $_POST['password'];

$usuario = new Usuario();

$usuario->nombre = $_POST['nombre'];
$usuario->dni = $dni;
$usuario->edad = $edad;
$usuario->password = $password;
$usuario->crear();
var_dump($usuario);

// header("Location: index.php");