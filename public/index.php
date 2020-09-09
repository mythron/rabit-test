<?php

namespace App;

$start = microtime(true);

include_once('../boot.php');

if (isset($_SERVER['REQUEST_URI'])) {
    $router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

    $router->route('GET', '/', 'HomeController.index');
    $router->route('GET', '/users', 'UserController.index');
    $router->route('GET', '/ads', 'AdvertisementController.index');

    // return 404 error if the page is not found
    if (!$router->isFound()) {
        http_response_code(404);
    }
}

$end = microtime(true);
$loadtime = number_format(($end - $start) * 1000, 3) . 'ms';
ez_log(($_SERVER['REQUEST_URI'] ?? 'NO REQUEST') . ': ' . $loadtime);