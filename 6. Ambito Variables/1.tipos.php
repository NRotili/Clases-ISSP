<?php

//Variable local.
$varLocal = "Hola<br>";
function miFuncion()
{
    $varLocal = "Hola desde función <br>";
}
miFuncion();
echo $varLocal; 


//Variable global.
global $varGlobal;
$varGlobal = "Hola <br>";
echo $varGlobal;
function miFuncion2()
{
    $GLOBALS["varGlobal"] = "Hola desde función<br>";
}
miFuncion2();
echo $varGlobal;


//Variable superglobal.
$_SERVER["SERVER_NAME"];
$_REQUEST["nombre"];
$_POST["nombre"];
$_GET["nombre"];
$_FILES["archivo"];
$_ENV["PATH"];
$_COOKIE["nombre"];
$_SESSION["nombre"];
