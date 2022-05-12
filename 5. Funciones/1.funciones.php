<?php

// function bienvenida(string $usuario = 'Invitado'):string{
//     return "Bienvenido $usuario";
// }
// echo bienvenida('Nicolás');

// function bienvenida($usuario){
//     return "Bienvenido $usuario";
// }
// echo bienvenida('Nicolás');


declare(strict_types=1);
function sumar(int ...$numeros):int{
    return array_sum($numeros);
}
echo sumar(1,2,3,4,5);

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