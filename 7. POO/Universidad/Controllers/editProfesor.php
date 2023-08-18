<?php

require_once __DIR__ . '/../Model/Profesor.php';
require_once __DIR__ . '/../Model/Departamento.php';

$id = $_GET['id'];
$profesor = Profesor::getById($id);
$departamentos = Departamento::all();

if ($profesor) {
    require_once __DIR__ . '/../Views/editProfesor.view.php';
} else {
    echo "No se encuentra profesor";
}	