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
        <h2>Card Header and Footer</h2>
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                        </div>
                        <div class="col-12 col-md-3">
                            <label for="apellido">Apellidos</label>
                            <input type="text" id="apellido" name="apellido" class="form-control">
                        </div>
                        <div class="col-12 col-md-3">
                            <label for="fecnac">Fecha de nacimiento</label>
                            <input type="date" id="fecnac" name="fecnac" class="form-control">
                        </div>
                        <div class="col-12 col-md-3">
                            <label for="dni">DNI</label>
                            <input type="text" id="dni" name="dni" class="form-control">
                        </div>
                    </div>

                    <div class="row pt-2">
                        
                        <div class="col-12 col-md-3">
                            <label for="direccion">Dirección</label>
                            <input type="text" id="direccion" name="direccion" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control">
                        </div>
                        <div class="col-12 col-md-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="fecalta">Fecha de alta</label>
                            <input type="date" id="fecalta" name="fecalta" class="form-control">
                        </div>
                        <div class="col-12 col-md-2">
                            <label for="sexo">Sexo</label>
                            <select name="sexo" id="sexo" class="form-control">
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>
                        </div>

                    </div>


            </div>

            <div class="card-footer">
                <div class="btn-wrapper text-center d-flex justify-content-between">
                    <a class="btn btn-secondary  btn-sm text-white d-flex align-items-center">Remove</a>
                    <a class="btn btn-warning" style="">Next</a>
                </div>
            </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>