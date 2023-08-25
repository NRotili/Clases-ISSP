<?php


require_once __DIR__ . '/../Model/Asignatura.php';
require_once __DIR__ . '/../Model/Alumno.php';

//Get all asignaturas
$asignaturas = Asignatura::all();

//Check if form is submitted
if (isset($_POST['submit'])) {
    //Get data from fo rm
    $nif = $_POST['nif'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $sexo = $_POST['sexo'];
    $id_asignaturas = $_POST['asignaturasSeleccionadas'];

    //Create new alumno
    $alumno = new Alumno();
    $alumno->nif = $nif;
    $alumno->nombre = $nombre;
    $alumno->apellido1 = $apellido1;
    $alumno->apellido2 = $apellido2;
    $alumno->ciudad = $ciudad;
    $alumno->direccion = $direccion;
    $alumno->telefono = $telefono;
    $alumno->fecha_nacimiento = $fecha_nacimiento;
    $alumno->sexo = $sexo;
    $alumno->id_asignaturas = $id_asignaturas;
    $alumno->create();
    //Redirect to alumnos list
    // header('Location: /../Controllers/listAlumnos.php');
}


//Load view
require_once __DIR__ . '/../Views/createAlumno.view.php';


