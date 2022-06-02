<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <?php if (isset($_GET['res'])) { ?>
            <div class="alert alert-success mt-4">

                <?= $_GET['res']; ?>

            </div>
        <?php } ?>


        <div class="card">
            <div class="card-header">Registro de Paciente</div>
            <div class="card-body">
                <form action="update.php" method="post">
                    <div class="row">
                        <input type="hidden" name="id" value="<?php echo $paciente->id; ?>">
                        <div class="col-12 col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" value="<?= $paciente->nombre ?>" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="apellido">Apellidos</label>
                            <input type="text" value="<?= $paciente->apellido ?>" id="apellido" name="apellido" class="form-control">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="fecnac">Fecha de nacimiento</label>
                            <input type="date" value="<?= $paciente->fecnac ?>" id="fecnac" name="fecnac" class="form-control">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block mt-4" name="save">Actualizar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>