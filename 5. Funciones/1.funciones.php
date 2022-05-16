<?php

declare(strict_types=1);
// function bienvenida(string $usuario = 'Invitado'):string{
//     return "Bienvenido $usuario";
// }
// echo bienvenida('Nicolás');


// function sumar(int ...$numeros):int{
//     return array_sum($numeros);
// }
// echo sumar(1,2,3,4,5);


// function sumar($numero1, $numero2):int{
//     return $numero1+$numero2;
// }
// echo sumar(1,2);

// date_default_timezone_set('America/Argentina/Buenos_Aires');
// $date = new DateTime();

// echo $date->format('d-m-Y')." <br>";
// echo $date->format('d-m-Y H:i:s')." <br>";


// echo date('d-m-Y');


//Calcular potencia.
function potencia(int $base, int $exponente):int
{
    return $base**$exponente;
}

//Calcular factorial
function factorial(int $numero):int
{
    if($numero == 0){
        return 1;
    }else{
        return $numero * factorial($numero-1);
    }
}

//Mayor de un array
function mayor(array $numeros):float
{
    $mayor = $numeros[0];
    foreach($numeros as $numero){
        if($numero > $mayor){
            $mayor = $numero;
        }
    }
    return $mayor;
}

