<?php

require_once 'Humano.php';
require_once 'Zombie.php';
$humano = new Humano;
$zombie = new Zombie;

while ($zombie->vida > 0 && $humano->vida > 0) {
    $quienPega = rand(0, 1);
    $arma = rand(0, 1);
    if ($quienPega == 0) {
        if ($arma == 1) {
            $daño = $humano->atacarConArma();
            $zombie->recibirGolpe($daño);
            echo "El humano ataca al zombie con un arma y le hace $daño de daño. <br>";
        } else {
            $daño = $humano->atacar();
            $zombie->recibirGolpe($daño);
            echo "El humano ataca al zombie y le hace $daño de daño. <br>";
            echo "Vida del zombie: " . $zombie->vida . "<br>";
        }
    } else {
        $daño = $zombie->atacar();
        $humano->recibirGolpe($daño);
        echo "El zombie ataca al humano y le hace $daño de daño. <br>";
        echo "Vida del humano: " . $humano->vida . "<br>";
    }
}








// echo $zombie->atacar();
// echo $humano->atacar();
// echo $humano->vida;






// $humano = new Humano();
// // $humano->vida = 150;
// $zombie = new Zombie();


// $golpeHumano = $humano->atacar();
// echo "Golpe Humano:  $golpeHumano <br>";
// $zombie->recibirGolpe($golpeHumano);
// echo "Vida Zombie: " . $zombie->vida . "<br>";

// $golpeZombie = $zombie->atacar();
// echo "Golpe Zombie:  $golpeZombie <br>";
// $humano->recibirGolpe($golpeZombie);
// echo "Vida Humano: " . $humano->vida . "<br>";
