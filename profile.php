<?php


$access_token = 'AlcTu79Llq0dSAwi6uwsaFpDny7cpabv+VRYNoURIsVNd7pa5Y8PikZ7qkL/7KZVeE8yYHe0NZXTvSMvjmQXxYwJLVXH0gIKND3rqwY6teNCdvAeSDdDSp8u/gcI6kWRxj3UwktNpgKf/v5Jys91vAdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

