<?php

$url = "http://127.0.0.1:8081/server-resource";

$context = stream_context_create([
    "http" => [
        "method" => "GET",
        "header" => "Authorization: Bearer access-token-1",
        "header" => "Content-type: application/x-www-form-urlencoded\r\n"
    ],
]);

$result = file_get_contents($url, false, $context);

echo $result;
