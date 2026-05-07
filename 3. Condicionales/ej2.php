<?php

//Según notas, decir si aprobó, regularizo o está promovido.
//si la nota es menor que 6, está libre, si la nota es mayor o igual a 6 y menor que 8, está regular, y si es mayor o igual a 8 está promovido.

$nota = rand(1,10);
// echo "Tu nota es: $nota";

// if ($nota < 6){
//     echo "Estás libre.";
// } elseif ($nota >= 6 && $nota <8){
//     echo "Estás regular.";
// } else {
//     echo "Estás promovido.";
// }

// nota < 6 y >=0
//     quedamos libre
// sino
    // nota >= 6 y < 8
        // nota regular
    // sino
        // nota >= 8 y <= 10
            // no esperaba menos
        // sino
            // nota < 0 y nota > 10
                // wtf
            // sino
            //     pone bien la nota
            // fin
        // fin
    // fin
// fin

// $resultado = ($nota < 6 and $nota >= 0) ? "$nota quedamos libre papi <br>" : (($nota >= 6 and $nota < 8) ? "$nota regular pa, ni tanto no te pongas tan feliz <br>": (($nota >= 8 and $nota <= 10) ? "$nota No esperaba menos, es tu deber <br>  " : (($nota < 0 or $nota > 10) ?  "¿$nota? wtf man, syntax error pone bien la nota boludito <br>" : "error" )));

// echo $resultado;


for ($i=1; $i <=10 ; $i++) { 
    echo $i . "<br>";
}


?>