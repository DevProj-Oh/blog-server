<?php

use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\TagController;
use Dingo\Api\Routing\Router;

$api = app(Router::class);

$api->version('v1', function ($api) {

    $api->get('tags', TagController::class . '@index');
    $api->get('categories', CategoryController::class . '@index');
    $api->get('articles', ArticleController::class . '@index');
});
