<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- insert last version bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <!-- Form to create profesor -->
    <div class="container">
        <div class="row mt-5">
            <div class="col col-1">

            </div>
            <div class="col col-12 col-md-10">
                <?php if (isset($msg)) : ?>
                    <div class="alert alert-info" role="alert">
                        <?= $msg ?>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="nif" class="form-label">NIF</label>
                                    <input type="text" class="form-control" id="nif" name="nif" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="apellido1" class="form-label">Apellido 1</label>
                                    <input type="text" class="form-control" id="apellido1" name="apellido1" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="apellido2" class="form-label">Apellido 2</label>
                                    <input type="text" class="form-control" id="apellido2" name="apellido2" required>

                                </div>

                            </div>
                            <div class="row">
                                <!-- Ciudad -->
                                <div class="col-md-3">
                                    <label for="ciudad" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad" name="ciudad" required>


                                </div>
                                <!-- Direccion -->
                                <div class="col-md-3">
                                    <label for="direccion" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>

                                </div>
                                <!-- Telefono -->
                                <div class="col-md-3">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" required>

                                </div>
                                <!-- Fecha nacimiento -->

                                <div class="col-md-3">
                                    <label for="fecha_nacimiento" class="form-label">Fecha nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>

                                </div>




                            </div>
                            <div class="row">

                                <!-- Sexo, H or M select -->
                                <div class="col-md-6">
                                    <label for="sexo" class="form-label">Sexo</label>
                                    <select class="form-select" id="sexo" name="sexo" required>
                                        <option value="H">Hombre</option>
                                        <option value="M">Mujer</option>
                                    </select>

                                </div>

                                <!-- Departamento, select -->
                                <div class="col-md-6">
                                    <label for="id_departamento" class="form-label">Sexo</label>
                                    <select class="form-select" id="id_departamento" name="id_departamento" required>
                                        <?php foreach ($departamentos as $departamento) : ?>
                                            <option value="<?= $departamento->id ?>"><?= $departamento->nombre ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>