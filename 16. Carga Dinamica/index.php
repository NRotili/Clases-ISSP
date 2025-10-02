<!DOCTYPE html>
<html>
<head>
    <title>Selects Dinámicos</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form>
        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia">
            <option value="">Seleccione una provincia</option>
            <option value="1">CABA</option>
            <option value="2">Buenos Aires</option>
            <option value="13">Santa Fe</option>
        </select>

        <label for="ciudades">Ciudades:</label>
        <select id="ciudades" name="ciudades">
            <option value="">Seleccione una ciudad</option>
        </select>
    </form>

    <script>
    $(document).ready(function() {
        $('#provincia').change(function() {
            var provinciaId = $(this).val();
            
            if(provinciaId != '') {
                $.ajax({
                    url: 'get_ciudades.php',
                    type: 'POST',
                    data: {provincia_id: provinciaId},
                    success: function(response) {
                        $('#ciudades').html(response);
                    }
                });
            } else {
                $('#ciudades').html('<option value="">Seleccione una ciudades</option>');
            }
        });
    });
    </script>
</body>
</html>