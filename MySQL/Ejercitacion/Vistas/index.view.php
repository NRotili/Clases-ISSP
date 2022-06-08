<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-4">
        <?php if (isset($_SESSION['info'])){ ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['info']; ?>
                <?php unset($_SESSION['info']); ?>
            </div>
        <?php } ?>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-secondary" href="./create.php" style="float: right;">Nuevo Paciente</a>
                <h3>Listado de pacientes</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha de nacimiento</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pacientes as $paciente) : ?>
                            <tr>
                                <th scope="row"><?= $paciente->id ?></th>
                                <td><?= $paciente->nombre; ?></td>
                                <td><?= $paciente->apellido; ?></td>
                                <td><?= $paciente->fechanacimiento; ?></td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="./update.php?id=<?= $paciente->id ?>"><i class="fas fa-pen"></i></a>
                                </td>
                                <td width="10px">
                                    <a class="btn btn-danger" href="./delete.php?id=<?= $paciente->id ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>