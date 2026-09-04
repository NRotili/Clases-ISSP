<?php

require_once __DIR__ . '/../Models/Usuario.php';

$ciudades = Ciudad::obtenerTodos();

require_once __DIR__ . '/../Views/create.view.php';
