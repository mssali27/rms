<?php
 $apiURL = 'https://graph.facebook.com/v2.2/188665847966940/ratings?access_token=CAADpXStPXO4BAJoVhxmfwqHFmYyvaq1Q6JPp2Jgu7zQtzLuKlyNr4do23HeRrGWZBu3bID544ZAzMgLbDiQY3cmaFpDCmDWdZCoBZBym8pbJM3YiiXN7WAotclSzpJvLjjgUzcNFCZC6CH5fgVlyGG627rARyT7IS83JsZAOJy1ZBmpotFbcLedURez9DmTKUBIEcJ8d2wnAHhTut6QfxSX&expires=Never&format=json&method=get&pretty=0&suppress_http_code=1';

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$apiURL);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
//curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$data = curl_exec($ch);
curl_close($ch);

print_r($data);

?>
