<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="enviar.php" method="post">
        <table>
            <tr>
                <th><input type="text" id="itemcode"></th>
                <th><input type="text" id="itemname"></th>
                <th><input type="text" id="itemprice"></th>
                <th><input type="text" id="itemqty"></th>
                <th></th>
            </tr>
            <tbody id="itemlist">

            </tbody>
        </table>
        <button type="submit">Enviar</button>

    </form>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>

    <script type="text/javascript">
        $('#itemcode').keypress(function(e){
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#itemname').focus();
            }
        });   
        $('#itemname').keypress(function(e){
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#itemprice').focus();
            }
        });
        $('#itemprice').keypress(function(e){
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#itemqty').focus();
            }
        });

        $("tbody#itemlist").on("click", ".remover-fila", function(){
            $(this).closest("tr").remove();
        });

        $('#itemqty').keypress(function(e){
            if (e.keyCode == 13) {
                e.preventDefault();
                var itemcode = $('#itemcode').val();
                var itemname = $('#itemname').val();
                var itemprice = $('#itemprice').val();
                var itemqty = $('#itemqty').val();
                var items = "";
                items += "<tr>";
                items += "<th><input type='text' name='item[code][]' value='" +itemcode+ "' id='itemcode'></th>"
                items += "<th><input type='text' name='item[name][]' value='" +itemname+ "' id='itemname'></th>"
                items += "<th><input type='text' name='item[price][]' value='" +itemprice+ "' id='itemprice'></th>"
                items += "<th><input type='text' name='item[qty][]' value='" +itemqty+ "' id='itemqty'></th>"
                items += "<th><button class='remover-fila'>X</button></th>";
                items += "</tr>";

                $('#itemlist').append(items);
            }
        });
    </script>

</body>

</html>