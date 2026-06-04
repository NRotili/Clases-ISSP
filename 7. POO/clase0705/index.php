<?php

require_once 'Usuario.php';

// $usuario = new Usuario;
// $usuario->nombre = "Alvaro Gonzalez";
// $usuario->dni = "48000000";
// $usuario->edad = 21;
// $usuario->password = "789654";
// $usuario->crear();

$usuario = Usuario::obtenerPorId(2);
// var_dump($usuario);
echo "<br>";
$usuario->nombre = "Roman Riquelme";
$usuario->dni = "65478963";
$usuario->edad = "55";
$usuario->password= "pepe";
// var_dump($usuario);
$usuario->actualizar();

// var_dump($usuario);