<?php

$ch = curl_init();


//Petición GET.

curl_setopt($ch, CURLOPT_URL, "https://reqres.in/api/users/2");
//Opcional si queremos retornar los datos en lugar
// de mostrarlos en el navegador de forma fea.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
} else {
    $info = json_decode($response, true);
    // var_dump($info);
}
foreach ($info['data'] as $value) {
    echo $value;
}
curl_close($ch);




// // Petición POST
// $array = [
//     'name' => 'ROTNIC',
//     'job' => 'Empleado Muni'
// ];
// //Transformar el array para ser enviado por URL.
// $data = http_build_query($array);

// curl_setopt($ch, CURLOPT_URL, "https://reqres.in/api/users");
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo curl_error($ch);
// }else{
//     $info = json_decode($response, true); //True para que devuelva array asociativo
//     // var_dump($info);
// }

// foreach ($info as $key => $value) {
//     echo "$key: $value <br>";
// }
// curl_close($ch);


// $curl = curl_init();
// $serie = "ozark";
// curl_setopt_array($curl, [
//     CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/auto-complete?q=$serie",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_FOLLOWLOCATION => true,
//     CURLOPT_ENCODING => "",
//     CURLOPT_MAXREDIRS => 10,
//     CURLOPT_TIMEOUT => 30,
//     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//     CURLOPT_CUSTOMREQUEST => "GET",
//     CURLOPT_HTTPHEADER => [
//         "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
//         "X-RapidAPI-Key: bd0ace7c08msh1050f24e09ffc07p13aecajsn9a5d15210467"
//     ],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//     echo "cURL Error #:" . $err;
// } else {
//     echo $response;
//     $info = json_decode($response, true); //True para que devuelva array asociativo
// }


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <!-- Table table-strped -->
            <div class="col col-12 col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Avatar</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td><?= $info['data']['first_name'] ?></td>
                                <td><?= $info['data']['last_name'] ?></td>
                                <td><?= $info['data']['email'] ?></td>
                                <td><img src="<?= $info['data']['avatar'] ?>" alt=""></td>
                            </tr>
                    </tbody>
                </table>
            <div class="col col-12 col-md-6">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        body
                    </div>
                    <div class="card-footer">
                        footer
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>