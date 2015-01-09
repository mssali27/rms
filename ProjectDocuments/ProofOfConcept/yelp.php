<?php
 $apiURL = 'http://api2.yp.com/listings/v1/search?searchloc=91203&term=pizza&format=json&sort=distance&radius=5&listingcount=10&key=hrgeeaqzbs32mqh28btyskxb';

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$apiURL);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
//curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$data = curl_exec($ch);
curl_close($ch);

print_r($data);

?>