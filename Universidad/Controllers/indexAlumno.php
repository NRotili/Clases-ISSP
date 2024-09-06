<?php

require_once __DIR__ .'/../Model/Alumno.php';

// $alumnos = Alumno::all();

// require_once __DIR__ .'/../Views/indexAlumno.view.php';

$alumno = Alumno::getById(4);

foreach ($alumno->materias() as $materia) {
    echo "<p>$materia->nombre</p>";
}