<?php

$baseUrl = ""; // Projenin bulunduğu dizin yapısı. Örn: http://localhost/hurriyetApi

function curlFunc($url)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "apikey: Api KEY "	//https://developers.hurriyet.com.tr adresinden aldığınız Api Key.
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $decode = json_decode($response);
    return $decode;
}