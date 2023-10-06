<?php



//get https://rickandmortyapi.com/api/character 
if (isset($_POST['submitNext'])) {
	$api = $_POST['next'];
	
} elseif(isset($_POST['submitPrev'])) {
	$api = $_POST['prev'];
} else {
	$api = "https://rickandmortyapi.com/api/character";

}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
	echo curl_error($ch);
} else {
	$info = json_decode($response, true);
	// var_dump($info);
}

curl_close($ch);

require 'index.view.php';