<?php

require_once __DIR__ . '/../Model/Cliente.php';
//Todo el procesamiento para actualizar el cliente que va a venir desde el formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fecnac = $_POST['fecnac'];
$edad = $_POST['edad'];
$id_ciudad = $_POST['id_ciudad'];
// echo $id_ciudad;
//Obtener un cliente por el ID.
$cliente = Cliente::obtenerPorId($id);
$cliente->nombre = $nombre;
$cliente->apellido = $apellido;
$cliente->fecnac = $fecnac;
$cliente->email = $email;
$cliente->edad = $edad;
$cliente->id_ciudad = $id_ciudad;
// echo $cliente->id_ciudad;
$cliente->actualizar();

