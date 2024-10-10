<?php


$chatId = "831187074";
$message = "Hola, soy un bot de prueba";

sendMessage($chatId, $message);

function sendMessage($chatId, $message)
{


    $token = "5078284598:AAGCesECA81WSj1xWEPmxMItnxYwmtQh0xE";


    if (date('H') > 22 or date('H') < 9) {
        $data = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
            'disable_notification' => true
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    } else {
        $data = [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML'
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
        //FIN TELEGRAM
    }
}
