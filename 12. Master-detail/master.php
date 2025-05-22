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

<<<<<<< HEAD
    // // print_r($items);
    // foreach ($items as $item) {
    //     # code...
    //     echo $item['code']."<br>";
    //     echo $item['price']."<br>";
    //     echo $item['qty']."<br>";
=======
    // print_r($items);
    // for($i=0; $i<count($items); $i++){
    //     echo $items[$i]['code'] . "<br>";
    //     echo $items[$i]['price'] . "<br>";
    //     echo $items[$i]['qty'] . "<br>";
>>>>>>> 707beb31161da97b8bce617340fe02e4c1d6eab8
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
    $('#itemcode').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemname').focus();
        }
    });

    $('#itemname').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemprice').focus();
        }
    });

    $('#itemprice').keypress(function(e){
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemqty').focus();
        }
    });

    $('#itemqty').on('keypress', function(e){
        if (e.keyCode==13) {
            e.preventDefault();
            var itemcode = $('#itemcode').val();
            var itemname = $('#itemname').val();
            var itemprice = $('#itemprice').val();
            var itemqty = $('#itemqty').val();

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