<?php
require_once __DIR__ . '/../Models/Usuario.php';

$id  = $_POST['id'];
$nombre  = $_POST['nombre'];
$dni = $_POST['limon'];
$edad = $_POST['edad'];
$password = $_POST['password'];

$usuario = Usuario::obtenerPorId($id);
$usuario->nombre = $nombre;
$usuario->password = $password;
$usuario->dni = $dni;
$usuario->edad = $edad;
$usuario->actualizar();

header("Location: index.php");
