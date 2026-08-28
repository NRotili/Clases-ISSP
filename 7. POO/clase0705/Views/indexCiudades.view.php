<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Index Ciudades</title>
</head>

<body>

    <div class="container">
        
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Cód. Postal</td>
                    <td>Nombre</td>
                    <td>Provincia</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ciudades as $ciudad) { ?>
                    <tr>
                        <td><?= $ciudad->id ?></td>
                        <td><?= $ciudad->cod_postal ?></td>
                        <td><?= $ciudad->nombre ?></td>
                        <td><?= $ciudad->provincia()->nombre ?></td>

                        <td>
                            
                                
                        </td>
                    </tr>
                <?php    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>