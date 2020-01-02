<?php

use Dingo\Api\Routing\Router;

$api = app(Router::class);

$api->version('v1', function ($api) {
    $api->get('hello', function () {
        return ['hello'];
    });
});
