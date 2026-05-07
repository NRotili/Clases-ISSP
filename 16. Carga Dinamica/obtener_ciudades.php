<?php

$conexion = new mysqli("localhost", "root", "", "issp2025");

if (isset($_POST['provincia_id_backend'])) {
    $provinciaId = $_POST['provincia_id_backend'];
    $resultado = $conexion->prepare("SELECT * FROM ciudades WHERE id_provincia = ? ORDER BY nombre ASC");
    $resultado->bind_param("i", $provinciaId);
    $resultado->execute();

    $ciudades = $resultado->get_result();

    $options = '<option value="">Seleccione una ciudad</option>';

    while($ciudad = $ciudades->fetch_assoc()){
        $options .= "<option value='{$ciudad['id']}'>{$ciudad['nombre']}</option>";
    }

    echo $options;

}