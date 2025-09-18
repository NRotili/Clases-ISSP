<?php

require_once __DIR__ . '/../Model/Cliente.php';
require_once __DIR__ . '/../Model/Ciudad.php';

//Conseguir por GET la variable que estoy enviando en este caso, el id del cliente
$idCliente = $_GET['idCliente'];

//Buscar a través del método estático "obtenerPorId" el cliente por el id enviado a través de la variable GET.
$cliente = Cliente::obtenerPorId($idCliente);
$ciudades = Ciudad::todos();

//Todo el procesamiento para cargar el formulario y los datos del cliente que hay que editar

require_once __DIR__ . '/../Views/editarCliente.view.php';
