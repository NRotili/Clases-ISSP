<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">NIF</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido 1</th>
                    <th scope="col">Apellido 2</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Departamento</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($profesores as $profesor) : ?>
                    <tr>
                        <td><?= $profesor->nif ?></td>
                        <td><?= $profesor->nombre ?></td>
                        <td><?= $profesor->apellido1 ?></td>
                        <td><?= $profesor->apellido2 ?></td>
                        <td><?= $profesor->ciudad ?></td>
                        <td><?= $profesor->departamento()->nombre ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>