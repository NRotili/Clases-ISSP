<?php

$numeros = [];
for ($i=1; $i <=50 ; $i++) { 
    // $numeros[] = rand(1,30);
    array_push($numeros, rand(1,30));
}
foreach(array_keys($numeros, 5) as $valor) echo "posición". $valor;

// foreach ($numeros as $key => $numero) {
//     if ($numero == 5) {
//         echo "El número 5 se encontró en el arreglo en la posición $key <br>";
//     }
// }


// var_dump($numeros);

