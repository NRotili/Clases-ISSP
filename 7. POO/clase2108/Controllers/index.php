<?php

require_once __DIR__ . '/../Model/Cliente.php';
require_once __DIR__ . '/../Model/Ciudad.php';

// ';

// $ciudad = Ciudad::obtenerPorId(1);
// $clientes= $ciudad->clientes();
// echo "En ".$ciudad->nombre." viven los siguientes clientes: <br>";
// foreach ($clientes as $cliente) {
//     echo $cliente->nombre . "<br>";
// }
// var_dump($clientes);

// $cliente = Cliente::obtenerPorId(2);
// $productos =$cliente->productos();
// // var_dump($productos);
// foreach ($productos as $producto) {
//     echo "Producto: ". $producto->nombre . "<br>";
// }

// echo "El cliente ". $cliente->nombre . ' ' . $cliente->apellido . " vive en la ciudad de ". $cliente->ciudad()->nombre . " y su código postal es " . $cliente->ciudad()->cod_postal . " y pertenece a la provincia de ". $cliente->ciudad()->provincia()->nombre;

// var_dump($cliente);
// var_dump($cliente->ciudad());
// $clientesTotales = Cliente::todos();
// var_dump($clientesTotales);
// foreach ($clientesTotales as $cliente) {
//     echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// }

// var_dump($cliente);







// $cliente = Cliente::obtenerPorId(1);
// //  var_dump($cliente);
// echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// $cliente->nombre = "Alan";
// echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// $cliente->apellido = "Rodriguez";
// echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// $cliente->actualizar();

// $todosLosClientes = Cliente::all();
// // var_dump($todosLosClientes);
// foreach ($todosLosClientes as $cliente) {
//     echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// }


// $cliente = new Cliente();
// $cliente->nombre = "Damaris";
// $cliente->apellido = "Ramallo";
// $cliente->fecnac = "2003-01-01";
// $cliente->email = "rdamaris@prueba.com";
// $cliente->edad = 21;
// $cliente->crear();
// require_once 'Usuario.php';
// $user = new Usuario;
// $user->user = "admin";
// $user->pass = "1234";
// $user->crear();

// echo "Cliente creado exitosamente.<br>"


















// include_once 'Cliente.php';

//CREATE
// $cliente = new Cliente;
// $cliente->nombre = "Nico";
// $cliente->apellido = "ROtili";
// $cliente->fecnac = "1993-06-24";
// $cliente->email = "rotilinicolas@gmail.com";
// $cliente->edad = 18;
// $cliente->create();


// $usuario2 = new Cliente;
// $usuario2->nombre = "Nico";
// $usuario2->apellido = "Osan";
// $usuario2->fecnac = "2000-12-27";
// $usuario2->email = 22



// // // //UPDATE sin instanciar cliente, ya que uso funcion static
// $cliente = Cliente::getById(1);
// echo $cliente->nombre . " " . $cliente->apellido . "<br>";


// $cliente->nombre = "Alan";
// $cliente->apellido = "Gomez";
// $cliente->fecnac = "1993-06-01";
// $cliente->update();

// // //DELETE
// // $cliente = Cliente::getByEmail("alan@alan.com");
// // $cliente->delete();

// // // READ
// // $clientes = Cliente::all();
// // foreach ($clientes as $cliente) {
// //     echo $cliente->nombre . " " . $cliente->apellido . "<br>";
// // }


