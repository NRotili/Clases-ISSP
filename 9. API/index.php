<?php

$ch = curl_init(); //cURL Client-URL


// //Peticion GET
// curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users/2');
// //Si queremos que se retornen los datos
// // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// //Ejecuto la consulta
// // curl_exec($ch);
// $response = curl_exec($ch);
// if (curl_errno($ch)) {
//     echo curl_error($ch);
// }else{
//     $info = json_decode($response, true); //True para que devuelva array asociativo
//     var_dump($info);
// }
// curl_close($ch);


//Petición POST.

// $array = [
//     'name' => 'Nico',
//     'job' => 'Programador'
// ];

// //Transformo el array para url
// $data = http_build_query($array);

// curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($ch);

// if (curl_errno($ch)) {
//     echo curl_error($ch);
// }else{
//     $info = json_decode($response, true); //True para que devuelva array asociativo
//     var_dump($info);
// }


// foreach ($info as $key => $value) {
//     echo "$key: $value <br>";
// }
// curl_close($ch);

$curl = curl_init();
$serie = "peaky blinder";
curl_setopt_array($curl, [
	CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/auto-complete?q=$serie",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		"X-RapidAPI-Key: bd0ace7c08msh1050f24e09ffc07p13aecajsn9a5d15210467"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}