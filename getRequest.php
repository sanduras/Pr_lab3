<?php
    $settings = require_once('config.php');
    $url = "https://api.instantwebtools.net/v1/airlines";
    $fetchData = array_slice(getUsers($url,$settings), 0, 10);
// print_r($fetchData);
    function getUsers($url, $settings){
    // create a new resurce of cURL
    $ch = curl_init();
    // install URL ans set more options
    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, $settings['config']['proxy_port']);
    curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
    curl_setopt($ch, CURLOPT_PROXY, $settings['config']['proxy_ip']);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $settings['config']['loginpassw']);
    if($error = curl_error($ch)){
        echo $error;
    }
    else{
        $data = json_decode(curl_exec($ch), true);
    }
    // $data = curl_exec($ch);
    curl_close($ch);
    return($data);
}
?>