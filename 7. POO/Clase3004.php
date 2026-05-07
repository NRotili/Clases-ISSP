<?php

include_once 'Persona.php';
include_once 'JugadorFutbol.php';

// $persona = new Persona;
// $persona->nombre = "Nico";
// $persona->setearEdad(32);
// $persona2 = new Persona;
// $persona2->nombre = "Samu";
// $persona2->setearEdad(20);
// var_dump($persona);
// var_dump($persona2);

$jugador = new JugadorFutbol;
$jugador->nombre = "Nico";
$jugador->numero = 8;
$jugador->setearEdad(32);
var_dump($jugador);