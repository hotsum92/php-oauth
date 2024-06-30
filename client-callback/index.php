<?php

$code = $_GET['code'];
$state = $_GET['state'];

echo "code: $code\n";
echo "state: $state\n";
echo "\n";

error_log(print_r("request access_token from code", true));

echo "access_token: RANDOM_ACCESS_TOKEN\n";
