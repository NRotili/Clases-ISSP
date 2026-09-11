<?php

require_once __DIR__ . '/../Models/Usuario.php';
require_once __DIR__ . '/../Models/Ciudad.php';
require_once __DIR__ . '/../Models/Rol.php';

$ciudades = Ciudad::obtenerTodos();
$roles = Rol::obtenerTodos();

require_once __DIR__ . '/../Views/create.view.php';
