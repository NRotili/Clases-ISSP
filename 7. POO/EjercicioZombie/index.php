<?php
require 'Humano.php';
require 'Zombie.php';

$humano = new Humano;
$zombie = new Zombie;

while ($humano->vida > 0 && $zombie->vida > 0) {
    $quienPega = rand(0, 1);
    //0 para el humano y 1 para el zombie
    if ($quienPega == 0) {
        $meCuro = rand(0,1);
        if($meCuro == 1 && $humano->vida < 50) {
            $humano->tomarPocion();
            exit;
        }
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
