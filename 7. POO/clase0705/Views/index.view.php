<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Index usuarios</title>
</head>

<body>

    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>DNI</td>
                    <td>Password</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?= $usuario->id ?></td>
                        <td><?= $usuario->nombre ?></td>
                        <td><?= $usuario->dni ?></td>
                        <td><?= $usuario->password ?></td>
                        <td>
                            <div class="btn-group">

                                <a href="editarUsuario.php?rabanito=<?= $usuario->id ?>" class="btn btn-info">Editar</a>
                                <form action="eliminarUsuario.php" method="POST">
                                    <input type="hidden" name="usuarioId" value="<?= $usuario->id ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                                
                        </td>
                    </tr>
                <?php    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>