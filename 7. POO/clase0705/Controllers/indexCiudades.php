<?php

require_once __DIR__ . '/../Models/Ciudad.php';

$ciudades = Ciudad::obtenerTodos();

require_once __DIR__ . '/../Views/indexCiudades.view.php';