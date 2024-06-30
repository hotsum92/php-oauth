<?php

$url = "http://$_SERVER[HTTP_HOST]/server-authorize";
$url .= "?response_type=code";
$url .= "&client_id=oauth-client-1";
$url .= "&redirect_uri=" . urlencode("http://$_SERVER[HTTP_HOST]/client-callback");
$url .= "&state=RANDOM_STATE";

header("HTTP/1.1 302 Found");
header("Location: $url");

