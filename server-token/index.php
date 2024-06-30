<?php

$contentType = $_SERVER["CONTENT_TYPE"];
$authorization = $_SERVER["HTTP_AUTHORIZATION"];

$grantType = $_POST["grant_type"];
$code = $_POST["code"];
$redirectUri = $_POST["redirect_uri"];

error_log(print_r("content_type: $contentType", true));
error_log(print_r("authorization: $authorization", true));
error_log(print_r("grant_type: $grantType", true));
error_log(print_r("code: $code", true));
error_log(print_r("redirect_uri: $redirectUri", true));

echo json_encode(array(
  "access_token" => "access-token-1",
  "token_type" => "bearer",
  "refresh_token" => "refresh-token-1"
));
