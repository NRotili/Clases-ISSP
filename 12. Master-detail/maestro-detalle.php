<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="enviar.php" method="POST">

        <table>
            <tr>
                <th><input placeholder="Código" type="text" name="" id="itemcode"></th>
                <th><input placeholder="Nombre" type="text" id="itemname"></th>
                <th><input placeholder="Precio" type="text" id="itemprice"></th>
                <th><input placeholder="Cantidad" type="text" id="itemqty"></th>
                <th></th>
            </tr>

            <tbody id="itemlist">
                <!-- <tr>
                    <td><input type="hidden" name="item[code][]" value="ITEM001">ITEM001</td>
                    <td>Item 1</td>
                    <td><input type="text" class="span2" name="item[price][]" value="5000"></td>
                    <td><input type="text" class="span2" name="item[qty][]" value="10"></td>
                    <td><button class="remover-fila">Eliminar</button></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="item[code][]" value="ITEM002">ITEM002</td>
                    <td>Item 1</td>
                    <td><input type="text" class="span2" name="item[price][]" value="10000"></td>
                    <td><input type="text" class="span2" name="item[qty][]" value="10"></td>
                    <td><button class="remover-fila">Eliminar</button></td>
                </tr> -->

            </tbody>
        </table>
        <button type="submit">Enviar</button>
    </form>


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script type="text/javascript">
        $('#itemcode').keypress(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#itemname').focus();

            }
        });
        $('#itemname').keypress(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                $('#itemprice').focus();
            }
        });
        $('#itemprice').keypress(function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();

                $('#itemqty').focus();
            }
        });

        $("tbody#itemlist").on("click", ".remover-fila", function() {
            $(this).closest("tr").remove();
        });

        $('#itemqty').on('keypress', function(e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                var itemcode = $('#itemcode').val();
                var itemname = $("#itemname").val();
                var itemprice = $("#itemprice").val();
                var itemqty = $("#itemqty").val();
                var items = "";
                items += "<tr>";
                items += "<td><input type='hidden' name='item[code][]' value='" + itemcode + "'>" + itemcode + "</td>";
                items += "<td><input type='hidden' name='item[name][]' value='" + itemname + "'>" + itemname + "</td>";
                items += "<td><input type='text' name='item[price][]' value='" + itemprice + "'></td>";
                items += "<td><input type='text' name='item[qty][]' value='" + itemqty + "'></td>";
                items += "<td><button class='remover-fila'>Eliminar</button></td>";
                items += "</tr>";

                // if($("tbody#itemlist tr").length == 0){
                $("#itemlist").append(items);

                clear();
                // }


                // console.log(itemcode)
            }
        });


        function clear(){
            $("#itemcode").val("");
            $("#itemname").val("");
            $("#itemprice").val("");
            $("#itemqty").val("");
            $("#itemcode").focus();

        }
    </script>


</body>

</html>