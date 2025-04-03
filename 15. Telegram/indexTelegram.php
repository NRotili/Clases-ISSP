<?php

$botToken = "7636994278:AAHgkSxf_kQGXsivKnXBTZlwY_ihd3BJgKI";
$chatId= "831187074";

$message = "<u>Hello World!</u>";

function sendMessagE($botToken, $chatId, $message) {
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML',
        'disable_notification' => 'true'
    ];

    file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query($data));
}


// $data = [
//     'chat_id' => $chatId,
//     'text' => $message,
//     'parse_mode' => 'HTML',
//     'disable_notification' => 'true'
// ];

// file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?" . http_build_query($data));

// echo http_build_query($data);

// https://api.telegram.org/bot7636994278:AAHgkSxf_kQGXsivKnXBTZlwY_ihd3BJgKI/getUpdates