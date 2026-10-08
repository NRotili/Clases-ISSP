<?php

require_once __DIR__ . '/../Models/Usuario.php';
# NOMBRE, DNI, EDAD Y PASSWORD

// POST, GET, SERVER, COOKIE, SON TODAS VARIABLES SUPERGLOBALES.

$nombre  = $_POST['nombre'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$password = $_POST['password'];
$id_ciudad = $_POST['id_ciudad'];
$id_roles = $_POST['id_rol'];

// var_dump($nombre, $dni, $edad, $password, $id_ciudad, $id_rol);


$usuario = new Usuario();

$usuario->nombre = $nombre;
$usuario->dni = $dni;
$usuario->edad = $edad;
$usuario->password = $password;
$usuario->id_ciudad = $id_ciudad;
$usuario->crear();

$usuario = Usuario::obtenerPorId($usuario->conexion->insert_id);

$usuario->asignarRoles($id_roles);


// header("Location: index.php");