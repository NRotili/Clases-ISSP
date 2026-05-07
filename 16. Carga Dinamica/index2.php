<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <form>

        <div>
            <label for="provincias">Provincia</label>
            <select name="provincias" id="provincias">
                <option value="">Seleccione una opción</option>
                <option value="1">Santa Fe</option>
                <option value="2">Buenos Aires</option>
            </select>
        </div>
        <div>
            <label for="ciudades">Ciudades</label>
            <select name="ciudades" id="ciudades">
                <option value="">Seleccione una opción</option>
            </select>
        </div>


    </form>

    <script>
        $(document).ready(function() {
           
            $('#provincias').change(function() {
                var provinciaId = $(this).val();

                if(provinciaId != ''){
                    $.ajax({
                        url: 'obtener_ciudades.php',
                        type: 'POST',
                        data:{provincia_id_backend: provinciaId},
                        success: function(response){
                            $('#ciudades').html(response);
                        }
                    });
                } else {
                    $('#ciudades').html('<option value="">Seleccione una ciudad</option>')
                }
            });
        });
    </script>

</body>

</html>