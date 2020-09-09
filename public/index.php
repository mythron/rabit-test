<?php
// Contains the routing rules.
// I left in the performance logging intentionally.
// It should not be here for production environment.

namespace App;

$start = microtime(true);

include_once('../boot.php');

try {
    if (isset($_SERVER['REQUEST_URI'])) {
        $router = new Router($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

        $router->route('GET', '/', 'HomeController.index');
        $router->route('GET', '/users', 'UserController.index');
        $router->route('GET', '/ads', 'AdvertisementController.index');

        // return 404 error if the route is invalid
        if (!$router->isFound()) {
            http_response_code(404);
        }
    }

    $end = microtime(true);
    $loadtime = number_format(($end - $start) * 1000, 3) . 'ms';
    ez_log(($_SERVER['REQUEST_URI'] ?? 'NO REQUEST') . ': ' . $loadtime);
} catch (\Throwable $th) {
    ez_error_log($th->getCode() . ': ' . $th->getMessage());
    http_response_code(500);
}