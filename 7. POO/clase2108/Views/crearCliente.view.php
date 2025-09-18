<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="guardarCliente.php" method="POST">
        <div class="row">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" >

        </div>
        <div class="row">

            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" >

        </div>

        <div class="row">

            <label for="fecnac" class="form-label">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="fecnac" name="fecnac" >

        </div>
        <div class="row">

            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" >

        </div>
        <div class="row">

            <label for="edad" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" >

        </div>
        <div class="row">

            <label for="id_ciudad" class="form-label">Ciudad</label>
            <select name="id_ciudad" id="">
                <?php foreach ($ciudades as $ciudad) { ?>
                    <option value="<?= $ciudad->id ?>"><?= $ciudad->nombre ?></option>
                <?php } ?>
            </select>
    

        </div>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>