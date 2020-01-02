<?php

use App\Http\Controllers\Api\V1\TagController;
use Dingo\Api\Routing\Router;

$api = app(Router::class);

$api->version('v1', function ($api) {

    $api->get('tags', TagController::class . '@index');

    $api->get(
        'hello',
        function () {
            return ['hello'];
        }
    );
});
