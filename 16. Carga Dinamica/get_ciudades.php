<?php
$conexion = new mysqli("localhost", "root", "", "padel");

if(isset($_POST['provincia_id'])) {
    $provinciaId = $_POST['provincia_id'];
    
    $stmt = $conexion->prepare("SELECT id, nombre FROM ciudades WHERE provincia_id = ? ORDER BY nombre");
    $stmt->bind_param("i", $provinciaId); // "i" significa integer
    $stmt->execute();
    $result = $stmt->get_result();
    
    $options = '<option value="">Seleccione una provincia</option>';
    
    while($ciudad = $result->fetch_assoc()) {
        $options .= "<option value='{$ciudad['id']}'>{$ciudad['nombre']}</option>";
    }
    
    echo $options;
    
    $stmt->close();
    $conexion->close();
}
?>