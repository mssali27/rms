<?php
error_reporting(-1);
ini_set('display_errors','on');

$apiURL = 'https://api.avvo.com/api/1/lawyers/28995/reviews.json';//file_get_contents('https://api.avvo.com/api/1/lawyers/28995/reviews.json');

//print_r($file);

$username = 'sajid.shaik147@gmail.com';
$password = 'account029';
//...
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$apiURL);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
$result = curl_exec($ch);
print_r($result);
?>