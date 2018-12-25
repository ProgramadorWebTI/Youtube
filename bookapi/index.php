<?php



function getUrl() {
    $apiUrl = 'https://viacep.com.br/ws/01001000/json/';
    $json   = file_get_contents($apiUrl);
    $data   = json_decode($json);

    return $data;
}

// var_dump(getUrl());

function fileSimples($url)
{
    $json = file_get_contents($url);
    return (json_decode($json, true));
 
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // curl_setopt($ch, CURLOPT_HEADER, false);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_REFERER, $url);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    // $result = curl_exec($ch);
    // curl_close($ch);
    // return (json_decode($result, true));
}

function fileCurl($url)
{
    // $json = file_get_contents($url);
    // return (json_decode($json, true));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return (json_decode($result, true));
}

$apiUrl = 'https://viacep.com.br/ws/01001000/json/';

var_dump(fileSimples($apiUrl));

echo '<br><br><br><br><br>';

var_dump(fileCurl($apiUrl));

?>
