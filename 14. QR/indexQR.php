<?php
require 'lib/barcode.php';

//variables GET ID
if (isset($_GET['legajo'])) {
    $id = $_GET['legajo'];
    // $materia = $_GET['materia'];
}
// $id=123;
// //date
// date_default_timezone_set('America/Argentina/Buenos_Aires');
// $fecha = date('d/m/Y H:i:s');

$generator = new barcode_generator();

header('Content-Type: image/svg+xml');
$svg = $generator->render_svg(
    'qr',
    "http://192.168.2.119/Clases-issp/CEC/index.php?nombre=Nicolas&apellido=Villar&afiliado=123456",
    [
        'w' => 300,
        'h' => 300,
        // 'bc' => '#00f2df', //color de fondo
        // 'cs' => '#000000', //color de los espacios
        // 'cm' => '#ffffff', //color módulos
        'ms' => 'r' // s: square, r: round, x: cross
    ]
);
echo $svg;
