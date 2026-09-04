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

         <div class="row">
            <label for="id_ciudad">ID_CIUDAD</label>
            <select name="id_ciudad" id="">

                <?php foreach ($ciudades as $ciudad) { ?>
                    <option value="<?= $ciudad->id ?>"><?= $ciudad->nombre ?></option>
                <?php } ?>
            </select>
            <!-- <input type="number" id="id_provincia" name="id_provincia"> -->
        </div>

        <button type="submit">Enviar datos</button>

    </form>
</body>

</html>