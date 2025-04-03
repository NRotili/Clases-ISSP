<?php

//GET, nombre, apellido, afiliado
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $afiliado = $_GET['afiliado'];
}

//conexion mysqli
// $mysqli = new mysqli('localhost', 'root', '', 'cec');

// //insertar registro

// $mysqli->query("INSERT INTO afiliados (nombre, apellido, afiliado) VALUES ('$nombre', '$apellido', '$afiliado')");



$registro = false;


echo "Nombre: $nombre, Apellido: $apellido, Afiliado: $afiliado";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

<script>
    <?php
    if ($registro) {
        ?>alert("Asistencia OK");<?php 
    } else {
       ?> alert("Error en la asistencia");<?php
    }?>
</script>
</html>