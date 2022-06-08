<?php

// Incluyo Paciente
include_once './clases/Paciente.php';
session_start();

//Obtengo por get el ID y el paciente
$id = $_GET['id'];
$paciente = Paciente::getPacienteById($id);

//Elimino el paciente
$paciente->delete();

$_SESSION['info'] = 'Paciente eliminado correctamente';

//Redirecciono a index.
header('Location: index.php');