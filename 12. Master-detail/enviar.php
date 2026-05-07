<?php

$detalles = $_POST["item"];
$items = array();
for($i=0; $i<count($detalles['code']); $i++){
    array_push($items, array(
        'code' => $detalles['code'][$i],
        'price' => $detalles['price'][$i],
        'name' => $detalles['name'][$i],
        'qty' => $detalles['qty'][$i],
    ));
}
// var_dump($items);

for ($i=0; $i < count($items); $i++) { 
    echo $items[$i]['code']. " - ";
    echo $items[$i]['name']. " - ";
    echo $items[$i]['price']. " - ";
    echo $items[$i]['qty']. "<br>";
}
