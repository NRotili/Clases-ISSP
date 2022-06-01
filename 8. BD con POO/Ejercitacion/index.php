<?php

// Incluyo la clase paciente
require_once './clases/Paciente.php';

// Obtengo todos los registros desde la BD a través del objeto Paciente
$pacientes = Paciente::all();

// Incluyo el archivo de vista
include_once './vistas/index.view.php';