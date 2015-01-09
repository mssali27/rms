<?php
// curl --get 'https://api.twitter.com/1.1/statuses/user_timeline.json' --data 'count=2&screen_name=MssRandhir' --header 'Authorization: OAuth oauth_consumer_key="CED3OZx4waH18eLzm53Q", oauth_nonce="c7be2784b3f950ba7746561513b7c92a", oauth_signature="svhrTW8QUrBcaox2gBMr5Ojr8uA%3D", oauth_signature_method="HMAC-SHA1", oauth_timestamp="1420546094", oauth_token="306610756-NQ15UrffAIVyhYxnZpfdXEBrHxdMXA7aqhgLsQ96", oauth_version="1.0"' --verbose

 $apiURL = 'https://api.twitter.com/1.1/statuses/user_timeline.json?count=2&screen_name=MssRandhir';

$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: OAuth oauth_consumer_key="CED3OZx4waH18eLzm53Q", oauth_nonce="c7be2784b3f950ba7746561513b7c92a", oauth_signature="svhrTW8QUrBcaox2gBMr5Ojr8uA%3D", oauth_signature_method="HMAC-SHA1", oauth_timestamp="1420546094", oauth_token="306610756-NQ15UrffAIVyhYxnZpfdXEBrHxdMXA7aqhgLsQ96", oauth_version="1.0"',
    ));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$apiURL);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
//curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
$data = curl_exec($ch);
curl_close($ch);

print_r($data);

?>
