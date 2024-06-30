<?php

$code = $_GET['code'];
$state = $_GET['state'];

error_log(print_r("request access_token from code", true));


$url = "http://127.0.0.1:8081/server-token";

$authorization = "Basic " . base64_encode("oauth-client-1:oauth-client-secret-1");

$data = array(
  "grant_type" => "authorization_code",
  "code" => $code,
  "redirect_uri" => "http://$_SERVER[HTTP_HOST]/client-callback",
);
$options = array(
  "http" => array(
    "header" => "Content-type: application/x-www-form-urlencoded\r\n",
    "header" => "Authorization: $authorization\r\n",
    "method" => "POST",
    "content" => http_build_query($data),
  ),
);
$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$access_token = json_decode($result)->access_token;

echo "code: $code\n";
echo "state: $state\n";
echo "\n";
echo "access_token: $access_token\n";
