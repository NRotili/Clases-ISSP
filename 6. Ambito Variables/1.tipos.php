<?php

//Variable local.
$varLocal = "Hola<br>";
function miFuncion()
{
    $varLocal = "Hola desde función <br>";
    echo $varLocal;
}
miFuncion();
echo $varLocal; 


// //Variable global.
$varGlobal = "Hola <br>";
echo $varGlobal;
function miFuncion2()
{
    // $GLOBALS['varGlobal'] = "Hola desde función <br>";
    global $varGlobal;
    $varGlobal = "Hola desde función <br>";
}
miFuncion2();
echo $varGlobal;


$tipoDeVoz = 'Chillona';
function voz(){
    global $tipoDeVoz;
    echo $tipoDeVoz;
}


// $a = 1;
// $b = 2;
// function Suma()
// {
//     global $a, $b;
//     $b = $a + $b;
//     // $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// }
// Suma();
// echo $b;


// //Variable estática
// function test()
// {
//     static $a = 0;
//     echo "Valor: ".$a++. "<br>";
// }
// test();
// test();
// test();
// test();
// test();
// test();
// test();
// test();
// test();
// test();


//Variable superglobal.
$_SERVER["SERVER_NAME"];
$_REQUEST["nombre"];
$_POST["nombre"];
$_GET["nombre"];
$_FILES["archivo"];
$_ENV["NAME"];
$_COOKIE["nombre"];
$_SESSION["nombre"];
