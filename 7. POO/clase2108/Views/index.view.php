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
                <th colspan="2">Acciones</th>
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
                    <td><a href="editarCliente.php?idCliente=<?= $cliente->id?>">Editar</a></td>
                    <td>
                        <form action="eliminarCliente.php" method="POST">
                            <input type="hidden" name="id" value="<?= $cliente->id ?>">
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            <!-- ENDFOREACH -->
        </tbody>
    </table>
</body>

</html>