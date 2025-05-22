<<<<<<< HEAD
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

=======
<?php 

if(isset($_POST['enviar'])){
    // $detalles = $_POST['item'];
    // // print_r($detalles);

    // $items = array();

    // for($i=0; $i<count($detalles['code']); $i++){
    //     array_push($items, array(
    //         'code' => $detalles['code'][$i],
    //         'price' => $detalles['price'][$i],
    //         'qty' => $detalles['qty'][$i]
    //     ));
    // }

    // print_r($items);
    // for($i=0; $i<count($items); $i++){
    //     echo $items[$i]['code'] . "<br>";
    //     echo $items[$i]['price'] . "<br>";
    //     echo $items[$i]['qty'] . "<br>";
    // }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">


    <table width="50%">
        <tr>
            <th><input placeholder="Código" type="text" name="" id="itemcode"></th>
            <th><input placeholder="Nombre" type="text" name="" id="itemname"></th>
            <th><input placeholder="Precio" type="text" name="" id="itemprice"></th>
            <th><input placeholder="Cantidad" type="text" name="" id="itemqty"></th>
            <th>Acción</th>
        </tr>

        <tbody id="itemlist">

            <!-- <tr>
                <td><input type="hidden" value="ITEM001" name="item[code][]">ITEM001</td>
                <td>Item 1</td>
                <td><input type="text" value="50" name="item[price][]" id=""></td>
                <td><input type="text" value="100" name="item[qty][]" id=""></td>
                <td><button class="remover-fila">Eliminar</button></td>
            </tr>
            <tr>
                <td><input type="hidden" value="ITEM002" name="item[code][]">ITEM001</td>
                <td>Item 2</td>
                <td><input type="text" value="1000" name="item[price][]" id=""></td>
                <td><input type="text" value="10" name="item[qty][]" id=""></td>
                <td><button class="remover-fila">Eliminar</button></td>
            </tr> -->
        </tbody>
    </table>
    <input type="submit" name="enviar" value="Save">
</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>

<script type="text/javascript">
>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8
    $('#itemcode').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemname').focus();
        }
<<<<<<< HEAD
    })
=======
    });
>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8

    $('#itemname').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemprice').focus();
        }
<<<<<<< HEAD
    })
=======
    });
>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8

    $('#itemprice').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemqty').focus();
        }
<<<<<<< HEAD
    })

    $('#itemqty').on('keypress', function(e){
        if(e.keyCode==13){
=======
    });

    $('#itemqty').on('keypress', function(e){
        if (e.keyCode==13) {
>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8
            e.preventDefault();
            var itemcode = $('#itemcode').val();
            var itemname = $('#itemname').val();
            var itemprice = $('#itemprice').val();
            var itemqty = $('#itemqty').val();

<<<<<<< HEAD
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

=======
            // console.log(itemcode);
            // console.log(itemname);
            // console.log(itemprice);
            // console.log(itemqty);

            var items = "";
            items += "<tr>";
            items += "<td><input type='hidden' value='"+itemcode+"' name='item[code][]'>"+itemcode+"</td>";
            items += "<td>"+itemname+"</td>";
            items += "<td><input type='text' value='"+itemprice+"' name='item[price][]' id=''></td>";
            items += "<td><input type='text' value='"+itemqty+"' name='item[qty][]' id=''></td>";
            items += "<td><button class='remover-fila'>Eliminar</button></td>";
            items += "</tr>";

            $('#itemlist').append(items);
            clear();


>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8
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