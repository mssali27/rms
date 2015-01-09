<?php
 $apiURL = 'https://proapi.whitepages.com/2.0/location.json?street_line_1=403%20W%20Howe%20St&city=Seattle&state=WA&api_key=8c67ecd45ffd44840e329e072ddb1609';

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$apiURL);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
//curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$data = curl_exec($ch);
curl_close($ch);

print_r($data);

?>
