<?php

require_once 'Humano.php';
require_once 'Zombie.php';
$humano = new Humano;
$zombie = new Zombie;

//Atacar 10 veces.
for ($i = 0; $i < 10; $i++) {

    
    
}



si es un Humano
$daño = $humano->atacar();
$zombie->recibirGolpe($daño);
sino 
$daño = $zombie->atacar();
$humano->recibirGolpe($daño);
// echo $zombie->vida;




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
