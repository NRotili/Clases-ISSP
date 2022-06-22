<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto p-5 text-center">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <h1 class="display-4">LOGIN</h1>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Login</button>
                        </form>

                        <?php if (isset($_SESSION['info'])){?>
                            <div class="alert alert-danger mt-2">
                                <?= $_SESSION['info'] ?>
                                <?php unset($_SESSION['info']) ?>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>