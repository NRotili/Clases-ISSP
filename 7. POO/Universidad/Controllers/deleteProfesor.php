<?php

$id = $_GET['id'];
//init session
session_start();
//Clean session
unset($_SESSION['message']);
unset($_SESSION['error_message']);

require_once __DIR__ . '/../Model/Profesor.php';
$profesor = Profesor::getById($id);


if ($profesor) {
    $profesor->delete();
    //redirecto to Index
    header('Location: ../Controllers/indexProfesor.php');
} else {
    echo "No se ha podido eliminar";
}

