<?php

$authHeader = $_SERVER['HTTP_AUTHORIZATION'];
$contentType = $_SERVER['CONTENT_TYPE'];

error_log(print_r("Authorization: " . $authHeader, true));
error_log(print_r("Content-Type: " . $contentType, true));

echo "This is a protected resource!";
echo "\n";

