<?php

require_once __DIR__ . '/../Models/Usuario.php';

//todo el código de lo que quiero hacer
$usuarios = Usuario::obtenerTodos();

require_once __DIR__ . '/../Views/index.view.php';

