<?php

require_once 'Zombie.php';
require_once 'Humano.php';

$humano = new Humano();
// $humano->vida = 150;
$zombie = new Zombie();


$golpeHumano = $humano->atacar();
echo "Golpe Humano:  $golpeHumano <br>";
$zombie->recibirGolpe($golpeHumano);
echo "Vida Zombie: " . $zombie->vida . "<br>";

$golpeZombie = $zombie->atacar();
echo "Golpe Zombie:  $golpeZombie <br>";
$humano->recibirGolpe($golpeZombie);
echo "Vida Humano: " . $humano->vida . "<br>";
