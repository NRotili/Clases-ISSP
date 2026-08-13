<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="actualizarUsuario.php" method="POST">
        <div class="row">
            <input type="hidden" value="<?=  $usuario->id ?>" name="id">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= $usuario->nombre ?>">
        </div>

        <div class="row">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="limon" value="<?= $usuario->dni ?>">
        </div>

        <div class="row">
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" value="<?= $usuario->edad ?>">
        </div>

        <div class="row">
            <label for="password">Password</label>
            <input type="text" id="password" name="password" value="<?= $usuario->password ?>">
        </div>

        <button type="submit">Actualizar datos</button>

    </form>
</body>

</html>