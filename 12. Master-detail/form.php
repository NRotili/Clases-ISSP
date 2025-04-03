<?php
  if (isset($_POST["enviar"]))
	{
		// // echo "<pre>";
		// // //print_r($_POST);
		// // echo "</pre>";
		
		// // $head = $_POST["head"];
		// $detalles = $_POST["item"];
        // print_r($detalles);
		// // echo "Head Looping Foreach <br/>";
		// // foreach ($head as $k => $v)
		// // {
		// // 	echo $k . " = " . $v . "<br/>";
		// // }
		// // echo "<hr/>Head Tanpa Looping <br/>";
		// // echo "Nomor Faktur : ". $head["nofaktur"] . "<br/>";
		// // echo "Nama Kasir : ". $head["namakasir"] ."<br/><br/>";
		
		// $items = array();


       
        		
		// for ($i = 0; $i < sizeof($detail['code']); $i++) {
        //         array_push($items, array(
        //             "Código de item" => $detail['code'][$i],
        //             "Cantidad" => $detail['qty'][$i]
        //         ));
		// }
		// echo "<pre>";
		// print_r($items);
		// echo "</pre>";
		
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <!-- <table>
        <tr>
            <td>Nro. Factura </td>
            <td>: <input type="text" name="head[nofaktur]" value="xxx-103-001" readonly></td>
        </tr>
		<tr>
            <td>Cliente </td>
            <td>: <input type="text" name="head[namakasir]" value="Suhendra" readonly></td>
        </tr>
        <tr>
            <td>Fecha </td>
            <td>: </td>
        </tr>
    </table> -->
    <hr/>
    <table width ="50%">
        <tr>
            <th><input placeholder="Código" type="text"  name="itemcode" id="itemcode"/></th>
            <th><input placeholder="Nombre" type="text"  name="itemname" id="itemname"/></th>
            <th><input placeholder="Precio" type="text"  name="itemprice" id="itemprice"/></th>
            <th><input placeholder="Cantidad" type="text"  name="itemqty" id="itemqty"/></th>
            <th>Action</th>
        </tr>
        <tbody id="itemlist">
			<!-- <tr>
				<td><input type="hidden" name="item[code][]" value="ITEM001">ITEM001</td>
				<td>Item 1</td>
				<td><input type="text" class="span2" name="item[price][]" value="5000"></td>
				<td><input type="text" class="span2" name="item[qty][]" value="10"></td>
				<td><button class="remove-fila">Eliminar</button></td>
			</tr>
			<tr>
				<td><input type="hidden" name="item[code][]" value="ITEM002">ITEM002</td>
				<td>Item 1</td>
				<td><input type="text" class="span2" name="item[price][]" value="10000"></td>
				<td><input type="text" class="span2" name="item[qty][]" value="10"></td>
				<td><button class="remove-fila">Eliminar</button></td>
			</tr> -->
        </tbody>
    </table>
    <input type="submit" name="enviar" value="Save"/>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script type="text/javascript">
    $('#itemcode').keypress(function(e) {
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemname').focus();
        }
    });
    $('#itemname').keypress(function(e) {
        if(e.keyCode==13){
            e.preventDefault();

            $('#itemprice').focus();
        }
    });
    $('#itemprice').keypress(function(e) {
        if(e.keyCode==13){
            e.preventDefault();
            $('#itemqty').focus();
        }
    });

    function clear (){
        $("#itemcode").val("");
        $("#itemname").val("");
        $("#itemprice").val("");
        $("#itemqty").val("");
    }

    $("tbody#itemlist").on("click", ".remove-fila", function () {
        $(this).closest("tr").remove();
    });
    //  $("tbody#itemlist").on("click","#remove",function(){
    //     $(this).parent().parent().remove();
    // });
    $('#itemqty').on('keypress', function(e) {
        if(e.keyCode==13){
            e.preventDefault();
            var itemcode = $("#itemcode").val();
            var itemname = $("#itemname").val();
            var itemprice = $("#itemprice").val();
            var itemqty = $("#itemqty").val();
            var items = "";
            items += "<tr>";
            items += "<td><input type='hidden' name='item[code][]' value='"+ itemcode +"'>"+itemcode+"</td>";
            items += "<td>"+ itemname +"</td>";
            items += "<td><input type='text' class='span2' name='item[price][]' value='"+ itemprice +"'></td>";
            items += "<td><input type='text' class='span2' name='item[qty][]' value='"+ itemqty +"'></td>";
            items += "<td><button class='remove-fila'>Eliminar</button></td>";
			items += "</tr>";
        
            if ($("tbody#itemlist tr").length == 0)
            {
                $("#itemlist").append(items);
                clear();
            }else{
                var callback = checkList(itemcode);
                if(callback === true){
                    $("#itemlist").append(items);
                    clear();
                    return false;
                }
            }
        }
    });

    function checkList(val){
        var cb = true;
        console.log(val);
    
        $("#itemlist tr").each(function(index){
            var input = $(this).find("input[type='hidden']:first");
            if (input.val() == val){
                cb = false;
            }
        });
        return cb;
    }

   
</script>