<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <!-- FOREACH -->
            <?php foreach ($clientes as $cliente) { ?>
                <tr>
                    <td><?php echo $cliente->id ?></td>
                    <td><?= $cliente->nombre ?></td>
                    <td><?= $cliente->apellido ?></td>
                    <td><?= $cliente->fecnac ?></td>
                    <td><?= $cliente->email ?></td>
                    <td><?= $cliente->edad ?></td>
                    <td><?= $cliente->ciudad()->nombre  ?></td>
                </tr>
            <?php } ?>
            <!-- ENDFOREACH -->
        </tbody>
    </table>
</body>

</html>