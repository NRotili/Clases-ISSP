<?php

$nombre = "Nicolás";
$apellido = "Rotili";
$edad = "18";

// //Condicional IF
// if ($nombre == "Nicolás") {
//     echo "Nombre correcto <br>";
// } else {
//     echo "Nombre incorrecto <br>";
// }

//Condicional IF ternario
echo (($edad >= 18) ? "Mayor de edad" : "Menor de edad") . "<br>";

//Seleccion múltiple Switch
switch ($nombre) {
    case "Nicolás":
        echo "Nombre correcto <br>";
        break;
    case "Rotili":
        echo "Apellido correcto <br>";
        break;
    default:
        echo "Nombre incorrecto <br>";
        break;
};


// //Match
echo match($edad){
    $edad>=17 => "Nombre correcto",
    $edad>18 =>  "Apellido correcto",
    default =>  "Nombre incorrecto"
};

$oficial = 116;
$dolarHoy=$oficial*1.65;
// //Compra o venta de dolares?
// if ($dolarHoy<= 197) {
//     echo "Comprar dolares <br>";
// } elseif ($dolarHoy>= 210) {
//     echo "Vender dolares <br>";
// } else {
//     echo "No hacer nada <br>";
// }

switch (true) {
    case $tipo == 1 || $tipo == "auto":
        $valor=100;
        break;
    case $dolarHoy>=210:
        echo "Vender dolares <br>";
        break 1;
    default:
        echo "No hacer nada <br>";
        break 1;
}

echo match(false){
    $dolarHoy<=197 => "Comprar dolares",
    $dolarHoy>=210 => "Vender dolares",
    default => "No hacer nada"
};

