<?php

// Incluyo Paciente
include_once './clases/Paciente.php';
//Obtengo por get el ID y el paciente
$id = $_GET['id'];
$paciente = Paciente::getById($id);
//Elimino el paciente
$paciente->delete();
//Redirecciono a index.
header('Location: index.php');