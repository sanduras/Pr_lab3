<?php
    $settings = require_once('config.php');
    $url = "https://api.instantwebtools.net/v1/airlines";
    // print_r($fetchData);
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   
        // collect value of input field
        $data_array = array(
            'id ' => rand(43340, 50000),
            'name' => "flyone",
            'country' => "Moldova",
            'logo' => "aasets/img/logo.png",
            'slogan' => "fly with us",
            'head_quaters' => "Moldova",
            'website' => "ww.site",
            'established' => "1990"
        );
    // }

    $data = http_build_query($data_array);
    $fetchData = postUsers($url,$settings,$data);
    function postUsers($url, $settings,$data){
    // create a new resurce of cURL
    $ch = curl_init();
    // install URL ans set more options
    curl_setopt($ch, CURLOPT_URL, $url);
    
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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
        foreach($data as $key => $value){
            echo $key . ':' . $value .'<br>';
        }
    }
    // $data = curl_exec($ch);
    curl_close($ch);
    return($data);
}
?>