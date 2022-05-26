<?php

include_once 'Zombie.php';
include_once 'Humano.php';

$humano = new Humano;
$zombie = new Zombie;

echo $zombie->recibirGolpe($humano->golpear());
