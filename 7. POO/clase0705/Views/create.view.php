<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="guardarUsuario.php" method="POST">
        <div class="row">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="row">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni">
        </div>

        <div class="row">
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad">
        </div>

        <div class="row">
            <label for="password">Password</label>
            <input type="text" id="password" name="password">
        </div>

        <button type="submit">Enviar datos</button>

    </form>
</body>

</html>