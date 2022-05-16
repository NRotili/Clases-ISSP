<?php

declare(strict_types=1);

// function bienvenida(string $usuario = 'Invitado'):string{
//     return "Bienvenido $usuario";
// }
// echo bienvenida('Nico');

// function bienvenida($usuario = 'Invitado'){
//     echo "Bienvenido $usuario";
// }
// bienvenida();


// function sumar(int ...$numeros): int
// {
//     return array_sum($numeros);
// }
// echo sumar(1, 2, 3, 4, 5, 6, 7);

// function sumar(int $numero1, int $numero2): int
// {
//     return $numero1 + $numero2;
// }
// echo sumar(1, 2);

// date_default_timezone_set('America/Argentina/Buenos_Aires');
// $date = new DateTime();

// echo $date->format('d-m-Y')." <br>";
// echo $date->format('d-m-Y H:i:s')." <br>";


// echo date('d-m-Y');

//Calcular factorial
function factorial(int $numero): int
{
    if ($numero == 0) {
        return 1;
    }
    return $numero * factorial($numero - 1);
}
// echo factorial(6);

//Calcular potencia
function potencia(int $base, int $exponente): int
{
    
    return $base**$exponente;
}
// echo potencia(6, 3);

//Mayor de un array
function mayor(array $numeros): float
{
    $mayor = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }
    return $mayor;
}

// echo mayor([1, 2, 3, 4, 5, 6, 7, 7.5]);

