<?php
require_once __DIR__ . '/../Model/Ciudad.php';


//Generar una variable que contenga todas las ciudades de mi entidad Ciudades
$ciudades = Ciudad::todos();

require_once __DIR__ . '/../Views/crearCliente.view.php';