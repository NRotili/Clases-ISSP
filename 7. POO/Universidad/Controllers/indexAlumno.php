<?php

require_once __DIR__ . '/../Model/Alumno.php';

$alumno = Alumno::getById(28);
$asignaturas = $alumno->asignaturas();
foreach ($asignaturas as $asignatura) {
    echo $asignatura->nombre . '<br>';
}
