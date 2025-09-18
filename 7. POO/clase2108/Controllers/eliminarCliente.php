<?php

require_once __DIR__ .'/../Model/Cliente.php';

// $idCliente = $_GET['idCliente'];
$idCliente = $_POST['id'];

$cliente = Cliente::obtenerPorId($idCliente);
$cliente->eliminar();
