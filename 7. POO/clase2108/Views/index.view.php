<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS library -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables JBootstrap -->
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>

    <title>Document</title>
</head>

<body>

    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Lista de Usuarios</h2>
                    </div>
                    <table id="listaClientes" class="table table-sm table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Email</th>
                                <th>Edad</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($clientes as $cliente) { ?>
                                <tr>
                                    <td><?php echo $cliente->id ?></td>
                                    <td><?= $cliente->nombre ?></td>
                                    <td><?= $cliente->apellido ?></td>
                                    <td><?= $cliente->fecnac ?></td>
                                    <td><?= $cliente->email ?></td>
                                    <td><?= $cliente->edad ?></td>
                                    <td><?= $cliente->ciudad()->nombre  ?></td>
                                    <td>
                                        <a href="editarCliente.php?idCliente=<?= $cliente->id ?>">Editar</a>

                                        <form action="eliminarCliente.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $cliente->id ?>">
                                            <button type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha Nacimiento</th>
                                <th>Email</th>
                                <th>Edad</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    $(document).ready(
        function() {
            $('#listaClientes').DataTable({
                "oLanguage": {
                    "sLengthMenu": "Display _MENU_ records per page",
                    "sZeroRecords": "Nothing found - sorry",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Showing 0 to 0 of 0 records",
                    "sInfoFiltered": "(filtered from _MAX_ total records)"
                }
            });
        }
    );
</script>

</html>