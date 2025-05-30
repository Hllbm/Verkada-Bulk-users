<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.eu.verkada.com/core/v1/user', [
  'body' => '{"first_name":"User230000","last_name":"User230000"}',
  'headers' => [
    'accept' => 'application/json',
    'content-type' => 'application/json',
    'x-verkada-auth' => 'YzE3OTA4YTYtMDQ0Yi00ODY2LWFhZTQtOTBlZmVhMjJkYTE3fGY1NzE0NmEyLWM0NmMtNGJjYS04MjMzLWVjNTQyYmM0OTZiNQ==',
  ],
]);

echo $response->getBody();
