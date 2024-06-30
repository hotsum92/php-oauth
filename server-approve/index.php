<?php

$url = "http://$_SERVER[HTTP_HOST]/client-callback";
$url .= "?code=RANDOM_AUTH_CODE";
$url .= "&state=RANDOM_STATE";

header("HTTP/1.1 302 Found");
header("Location: $url");
