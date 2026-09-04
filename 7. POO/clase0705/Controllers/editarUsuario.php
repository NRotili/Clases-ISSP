<?php

require_once __DIR__ . '/../Models/Usuario.php';
require_once __DIR__ . '/../Models/Ciudad.php';

$id = $_GET['id'];
$usuario = Usuario::obtenerPorId($id);
$ciudades = Ciudad::obtenerTodos();
require_once __DIR__ . '/../Views/edit.view.php';

