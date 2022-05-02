<?php

$nombre = "Nicolás";
$edad = 28;

//Operador igualdad
echo (($nombre == "Nicolás") ? 'Si':'No') . "<br>"; //true
echo (($nombre == "Nicolás Rotili") ? 'Si':'No') . "<br>"; //false

//Operador distinto
echo (($nombre != "Nicolás") ? 'Si':'No') . "<br>"; //false
echo (($nombre != "Nicolás Rotili") ? 'Si':'No') . "<br>"; //true
//Operador mayor
echo (($edad > 18) ? 'Si':'No') . "<br>"; //true

//Operador menor
echo (($edad < 18) ? 'Si':'No') . "<br>"; //false

//Operador mayor o igual
echo (($edad >= 28) ? 'Si':'No') . "<br>"; //true

//Operador menor o igual
echo (($edad <= 28) ? 'Si':'No') . "<br>"; //true

//Operador Y
echo (($edad >= 18 && $edad <= 30) ? 'Si':'No') . "<br>"; //true

//Operador O
echo (($edad <= 18 || $edad >= 28) ? 'Si':'No') . "<br>"; //true