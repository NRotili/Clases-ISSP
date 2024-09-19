<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-3">
    <h1>Personajes de Rick y Morty</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php foreach ($personajes->results as $personaje) { ?>
                    <div class="col col-12 col-md-3">
                        <div class="card">
                            <div class="card-title">
                                <h5 class="text-center"><?php echo $personaje->name; ?></h5>
                            </div>
                            <div class="card-body">
                                <img src="<?= $personaje->image; ?>" alt="<?= $personaje->name; ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
    

</body>
</html>