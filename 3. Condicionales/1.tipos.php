<?php

$nombre = "Rotili";
$apellido = "Rotili";
$edad = "18";

//Condicional IF
// if ($nombre == "Nicolás") {
//     echo "Nombre correcto <br>";
// } else {
//     echo "Nombre incorrecto <br>";
// };

// Condicional IF ternario
// echo (($edad >= 18) ? "Mayor de edad" : "Menor de edad") . "<br>";

// //Seleccion múltiple Switch
switch ($nombre) {
    case "Nicolás":
        echo "Nombre correcto <br>";
        break;
    case "Rotilli":
        echo "Apellido correcto <br>";
        break;
    default:
        echo "Nombre incorrecto <br>";
        break;
};


// // //Match
// echo match($edad){
//     $edad>=17 => "Nombre correcto",
//     $edad>18 =>  "Apellido correcto",
//     default =>  "Nombre incorrecto"
// };

$oficial = 216;
$dolarHoy = $oficial * 1.65;
// //Compra o venta de dolares?
// if ($dolarHoy<= 357) {
//     echo "Comprar dólares <br>";
// } elseif ($dolarHoy>= 400) {
//     echo "Vender dólares <br>";
// } else {
//     echo "No hacer nada <br>";
// }

// switch (true) {
//     case ($dolarHoy <= 357):
//         echo "Comprar dólares <br>";
//         break;
//     case ($dolarHoy >= 400):
//         echo "Vender dólares <br>";
//         break;
//     default:
//         echo "No hacer nada <br>";
// }


// $resultado = match (true) {
//     ($dolarHoy <= 357) => "Comprar dólares <br>",
//     ($dolarHoy >= 400) => "Vender dólares <br>",
//     default => "No hacer nada <br>",
// };

// echo $resultado;


// //IF Ternario

// $resultado = ($dolarHoy <= 357) ? "Comprar dólares <br>" : (($dolarHoy >= 400) ? "Vender dólares <br>" : "No hacer nada <br>");

// echo $resultado;

// // switch (true) {
// //     case $tipo == 1 || $tipo == "auto":
// //         $valor=100;
// //         break;
// //     case $dolarHoy>=210:
// //         echo "Vender dolares <br>";
// //         break 1;
// //     default:
// //         echo "No hacer nada <br>";
// //         break 1;
// // }

// // echo match(false){
// //     $dolarHoy<=197 => "Comprar dolares",
// //     $dolarHoy>=210 => "Vender dolares",
// //     default => "No hacer nada"
// // };
