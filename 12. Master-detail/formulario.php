<?php
if(isset($_POST['enviar'])){

    $detalles = $_POST['item'];

    $items = array();

    for($i=0; $i<count($detalles['code']); $i++){
        array_push($items, array(
            'code' => $detalles['code'][$i],
            'price' => $detalles['price'][$i],
            'qty' => $detalles['qty'][$i]
        ));
    }

    foreach($items as $item){
        echo "Código: ".$item['code']."<br>";
        echo "Precio: ".$item['price']."<br>";
        echo "Cantidad: ".$item['qty']."<br>";
        echo "<hr>";
    }

}
?>

<form method="post" action="">

    <table>
        <tr>
            <th><input type="text" placeholder="código" name="" id="itemcode"></th>
            <th><input type="text" placeholder="nombre" name="" id="itemname"></th>
            <th><input type="text" placeholder="precio" name="" id="itemprice"></th>
            <th><input type="text" placeholder="cantidad" name="" id="itemqty"></th>
            <th>acción</th>
        </tr>

        <tbody id="itemlist">
            
        </tbody>
    </table>
    <input type="submit" name="enviar" value="Guardar">
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>

<script>

    $('#itemcode').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemname').focus();
        }
    })

    $('#itemname').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemprice').focus();
        }
    })

    $('#itemprice').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemqty').focus();
        }
    })

    $('#itemqty').on('keypress', function(e){
        if(e.keyCode==13){
            e.preventDefault();
            var itemcode = $('#itemcode').val();
            var itemname = $('#itemname').val();
            var itemprice = $('#itemprice').val();
            var itemqty = $('#itemqty').val();

            console.log(`itemcode: ${itemcode}, itemname: ${itemname}, itemprice: ${itemprice}, itemqty: ${itemqty}`);

            var items = "";
            items += "<tr>";
            items += "<td><input name='item[code][]' type='text' value='"+itemcode+"'></td>";
            items += "<td>"+itemname+"</td>";
            items += "<td><input name='item[price][]' type='text' value='"+itemprice+"'></td>";
            items += "<td><input name='item[qty][]' type='text' value='"+itemqty+"'></td>";
            items += "<td><button class='remover-fila'>eliminar</button></td>";
            items += "</tr>";

            $('#itemlist').append(items);

            clear();

        }
    })

    $("tbody#itemlist").on('click', ".remover-fila", function(){
        $(this).closest('tr').remove();
    })

    function clear(){
        $('#itemcode').val('');
        $('#itemname').val('');
        $('#itemprice').val('');
        $('#itemqty').val('');
        $('#itemcode').focus();
    }

</script>