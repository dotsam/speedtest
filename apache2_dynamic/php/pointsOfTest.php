<?php
// Headers
header('HTTP/1.1 200 OK');
header('Content-Type: application/json');
header('Accept: application/json');

// Points of test
$pots = array(
    "http://ip4.speedtest.dev",
    "http://ip6.speedtest.dev"
);
$routes = array(
    "ping" => "/ping",
    "ip" => "/ip",
    "download" => "/download/",
    "upload" => "/upload"
);
$response = array(
    "result" => $pots,
    "routes" => $routes
);

echo json_encode($response);
?>