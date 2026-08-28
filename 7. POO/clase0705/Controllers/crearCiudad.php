<?php

require_once __DIR__ . '/../Models/Provincia.php';
$provincias = Provincia::obtenerTodos();

require_once __DIR__ . '/../Views/createCiudad.view.php';