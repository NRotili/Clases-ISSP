<?php

require_once __DIR__ . '/../Model/Profesor.php';
require_once __DIR__ . '/../Model/Departamento.php';

$profesores = Profesor::all();

//Load view
require_once __DIR__ . '/../Views/indexProfesor.view.php';