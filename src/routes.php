<?php
$routes = [
    'metadata',
    'getReputationsForHosts'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

