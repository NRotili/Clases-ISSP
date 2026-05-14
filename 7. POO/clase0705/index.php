<?php

require_once 'Usuario.php';

$usuario = new Usuario;
$usuario->nombre = "Alvaro Gonzalez";
$usuario->dni = "48000000";
$usuario->edad = 21;
$usuario->password = "789654";
$usuario->crear();