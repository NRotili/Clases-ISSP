<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- Form turnos with checks and bootstrap-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Turnos</h1>
                <form action="seleccionahora.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php if (isset($_POST['nombre'])) {
                                                                                                        echo $_POST['nombre'];
                                                                                                    } ?>" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php if (isset($_POST['apellido'])) {
                                                                                                            echo $_POST['apellido'];
                                                                                                        } ?>" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_POST['email'])) {
                                                                                                    echo $_POST['email'];
                                                                                                } ?>" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php if (isset($_POST['telefono'])) {
                                                                                                            echo $_POST['telefono'];
                                                                                                        } ?>" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" class="form-control" id="fecha" value="<?php if (isset($_POST['dia'])) {
                                                                                        echo $_POST['dia'];
                                                                                    } ?>" name="dia" placeholder="Fecha">
                    </div>

                    <?php if (empty($turnos)) {
                        foreach ($turnos as $turno) { ?>

                            <div class="form-check">
                                <input class="form-check-input" id="<?= $turno ?>" type="checkbox" value="<?= $turno ?> " name="turnosReserva[]">
                                <label class="form-check-label" for="<?= $turno ?>">
                                    <?= $turno ?>
                                </label>
                            </div>
                        <?php
                        }
                    } else { ?>
                        <p>No hay turnos disponibles</p>
                    <?php } ?>


                    <button type="submit" name="reservar" class="btn btn-primary">Reservar turno >></button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>