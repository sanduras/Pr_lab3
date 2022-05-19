<?php
 $settings = require_once('config.php');
	$postFields = array(
		"checkLogin" => "1",
		"email" => "z61149036@gmail.com",
		"password" => "Qq149629ka",
		"courseID" => "2"
	);
	$cookie_file = "./cookie.txt";
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://codingpassiveincome.com/students/login.php");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, $settings['config']['proxy_port']);
    curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
    curl_setopt($ch, CURLOPT_PROXY, $settings['config']['proxy_ip']);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $settings['config']['loginpassw']);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postFields));
	curl_setopt($ch, CURLOPT_COOKIEJAR, realpath("cookie.txt"));
	$response = json_decode(curl_exec($ch));

	if ($response->status) {
		curl_setopt($ch, CURLOPT_URL, "https://codingpassiveincome.com/students/editProfile.php");
        curl_setopt($ch, CURLOPT_PROXYPORT, $settings['config']['proxy_port']);
        curl_setopt($ch, CURLOPT_PROXYTYPE, 'HTTP');
        curl_setopt($ch, CURLOPT_PROXY, $settings['config']['proxy_ip']);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $settings['config']['loginpassw']);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_COOKIEJAR, realpath("cookie.txt"));
		$response = curl_exec($ch);

    echo $response;
		
	}

	curl_close($ch);
