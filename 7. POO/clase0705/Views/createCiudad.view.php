<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="guardarCiudad.php" method="POST">
        <div class="row">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="row">
            <label for="cod_postal">Cod. Postal</label>
            <input type="text" id="cod_postal" name="cod_postal">
        </div>

        <div class="row">
            <label for="id_provincia">ID_PROVINCIA</label>
            <select name="id_provincia" id="">

                <?php foreach ($provincias as $provincia) { ?>
                    <option value="<?= $provincia->id ?>"><?= $provincia->nombre ?></option>
                <?php } ?>
            </select>
            <!-- <input type="number" id="id_provincia" name="id_provincia"> -->
        </div>

     

        <button type="submit">Enviar datos</button>

    </form>
</body>

</html>