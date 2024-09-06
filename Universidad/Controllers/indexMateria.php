<?php 

require_once __DIR__ .'/../Model/Materia.php';
require_once __DIR__ .'/../Model/Profesor.php';

// $profesor = Profesor::getById(3);

$materia = Materia::getById(4);

// echo $profesor->materia()->nombre;

// echo $profesor->ciudad()->provincia()->pais()->nombre;

foreach ($materia->alumnos() as $alumno) {
    echo "<p>$alumno->nombre</p>";
}