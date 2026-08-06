<?php

require_once __DIR__ . '/../Models/Usuario.php';

//todo el código de lo que quiero hacer
$usuarios = Usuario::obtenerTodos();

require_once __DIR__ . '/../Views/index.view.php';



// $usuario = new Usuario;
// $usuario->nombre = "Alvaro Gonzalez";
// $usuario->dni = "48000000";
// $usuario->edad = 21;
// $usuario->password = "789654";
// $usuario->crear();


// // var_dump($usuario);
// echo "<br>";
// $usuario->nombre = "Roman Riquelme";
// $usuario->dni = "65478963";
// $usuario->edad = "55";
// $usuario->password= "pepe";
// // var_dump($usuario);
// $usuario->actualizar();

// var_dump($usuario);




// foreach ($usuarios as $usuario) {
//     echo $usuario->nombre . "<br>";
//     echo $usuario->edad. "<br>";
// // }


// var_dump($usuarios);