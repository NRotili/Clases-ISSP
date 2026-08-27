<?php

require_once __DIR__ . '/../Models/Usuario.php';

$id = $_GET['id'];
$usuario = Usuario::obtenerPorId($id);
require_once __DIR__ . '/../Views/edit.view.php';

