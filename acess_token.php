<?php 
$consumer_Key = 'rP2bQaidTEbSrXxKRGTRMzAe0FlpZcya';
$consumer_Secret ='UtQoTQ6EcM7C8zI3';

$headers = ['Content-Type: application/json ;  charset=utf-8'];
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE );
curl_setopt($curl, CURLOPT_USERPWD, $consumer_Key. ':' .$consumer_Secret );
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
$access_token= $result->access_token;
echo $access_token;
curl_close($curl);


?>