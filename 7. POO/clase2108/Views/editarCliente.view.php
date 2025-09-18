<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="actualizarCliente.php" method="POST">
        <div class="row">
            <label for="nombre" class="form-label">ID del cliente</label>

            <input type="hidden" class="form-control" name="id" value="<?= $cliente->id ?>">
        </div>

        <div class="row">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $cliente->nombre ?>">

        </div>
        <div class="row">

            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $cliente->apellido ?>" >

        </div>

        <div class="row">

            <label for="fecnac" class="form-label">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="fecnac" name="fecnac" value="<?= $cliente->fecnac ?>">

        </div>
        <div class="row">

            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $cliente->email ?>" >

        </div>
        <div class="row">

            <label for="edad" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad" value="<?= $cliente->edad ?>">

        </div>
        <div class="row">

            <label for="id_ciudad" class="form-label">Ciudad</label>
            <select name="id_ciudad" id="">
                <?php foreach ($ciudades as $ciudad) { ?>
                    <option value="<?= $ciudad->id ?>"
                    
                    <?php

                    if($ciudad->id == $cliente->id_ciudad){
                        echo "selected";
                    }

                    ?>

                    ><?= $ciudad->nombre ?></option>
                <?php } ?>
            </select>
    

        </div>

        <button type="submit">Actualizar</button>

    </form>

</body>

</html>