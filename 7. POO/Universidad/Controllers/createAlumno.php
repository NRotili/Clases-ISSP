<?php


require_once __DIR__ . '/../Model/Asignatura.php';
require_once __DIR__ . '/../Model/Alumno.php';

//Get all asignaturas
$asignaturas = Asignatura::all();

//Load view
require_once __DIR__ . '/../Views/createAlumno.view.php';


