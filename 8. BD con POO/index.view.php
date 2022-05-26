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
                <form action="store.php" method="post">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="apellido">Apellidos</label>
                            <input type="text" id="apellido" name="apellido" class="form-control">
                        </div>
                        <div class="col-12 col-md-4">
                            <label for="fecnac">Fecha de nacimiento</label>
                            <input type="date" id="fecnac" name="fecnac" class="form-control">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block mt-4">Crear</button>
                    </div>
                </form>

            </div>

        </div>

<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha Nacimiento</th>
            <th colspan="2">Acción<th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pacientes as $paciente) { ?>
            <tr>
                <th scope="row"><?= $paciente->id; ?></th>
                <td><?= $paciente->nombre; ?></td>
                <td><?= $paciente->apellido; ?></td>
                <td><?= date("d/m/Y", strtotime($paciente->fecnac) ) ?></td>
                <td width="10px"><a href="" class="btn btn-sm btn-danger">Eliminar</a></td>
                <td width="10px"><a href="edit.php?id=<?= $paciente->id?>" class="btn btn-sm btn-warning">Editar</a></td>
            </tr>
        <?php } ?>

    </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>