<?php
require 'Humano.php';
require 'Zombie.php';

$humano = new Humano;
$zombie = new Zombie;

while ($humano->vida > 0 && $zombie->vida > 0) {
    $quienPega = rand(0, 1);
    if ($quienPega == 0) {
        $daño = $humano->golpear();
        echo "Golpe del humano: $daño <br>";
        echo "Vida del zombie sin golpe: " . $zombie->vida;
        $zombie->recibirGolpe($daño);
        echo "Vida del zombie despues golpe: " . $zombie->vida;
    } else {
        $conQueGolpeo = rand(0, 1);
        if ($conQueGolpeo == 0) {
            $daño = $zombie->golpear();
            $humano->recibirGolpe($daño);
        } else {
            $daño = $zombie->golpearConArma();
            $humano->recibirGolpe($daño);
        }
    }
}

// var_dump($humano);
