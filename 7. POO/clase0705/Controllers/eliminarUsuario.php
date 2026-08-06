<?php

require_once __DIR__ . '/../Models/Usuario.php';

$idUsuario = $_POST['usuarioId'];
// echo $idUsuario;
$usuario = Usuario::obtenerPorId($idUsuario);
$usuario->eliminar();

header("Location: ".$_SERVER['HTTP_REFERER']);