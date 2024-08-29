<?php

namespace App\Controllers;

use Exception;

class PrecioController extends Controller
{

    public function show($code)
    {

        return $code;
        
        $uri = URL_API . $code;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // try {
        //     $response = curl_exec($ch);
        //     return $response; 
        // } catch (Exception $e) {
        //     echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        // }

        curl_close($ch);

        return $this->view('precios.show');

    }
}
