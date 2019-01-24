<?php
$access_token = '5aUMYQBs5rMX2Sq4OcxmtJy5B2Z8SfWC/WhuusQ7qpy+8BDWfVilkJzYcxp7NActjwyv1wWWoCYjRMTjLi3YlkxxKCOb/jGRQfQBiJW+ae3sfeiabmvvKiiEyklYnauawCvWbRpsHtj6oez8C133bQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
