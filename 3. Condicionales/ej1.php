<?php

//dados 2 números, decir cual es el mayor o si son iguales

$numero1 = 30;
$numero2 = 10;

if ($numero1 > $numero2) {
    echo "El número $numero1 es mayor que el $numero2 <br>";
} else {
    if ($numero1 < $numero2) {
        echo "El número $numero2 es mayor que el $numero1 <br>";
    } else {
        echo "Los números son iguales <br>";
    }
}


//planteado con un elseif

if ($numero1 > $numero2) {
    echo "El número $numero1 es mayor que el $numero2 <br>";
} elseif ($numero1 < $numero2) {
    echo "El número $numero2 es mayor que el $numero1 <br>";
} else {
    echo "Los números son iguales <br>";
}

//planteado con switch
switch (true) {
    case ($numero1 > $numero2):
        echo "El número $numero1 es mayor que el $numero2 <br>";
        break;
    case ($numero1 < $numero2):
        echo "El número $numero2 es mayor que el $numero1 <br>";
        break;
    default:
        echo "Los números son iguales <br>";
}

//planteado con match
$resultado = match (true) {
    $numero1 > $numero2 => "El número $numero1 es mayor que el $numero2 <br>",
    $numero1 < $numero2 => "El número $numero2 es mayor que el $numero1 <br>",
    default => "Los números son iguales <br>"
};