<?php

# get response_type, client_id, redirect_uri
$response_type = $_GET['response_type'];
$client_id = $_GET['client_id'];
$redirect_uri = $_GET['redirect_uri'];
$state = $_GET['state'];

echo "response_type: $response_type\n";
echo "client_id: $client_id\n";
echo "redirect_uri: $redirect_uri\n";
echo "state: $state\n";
echo "\n";
echo "request http://$_SERVER[HTTP_HOST]/server-approve";
echo "\n";
