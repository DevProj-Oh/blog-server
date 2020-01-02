<?php

use App\Http\Controllers\Api\V1\ArticleController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\TagController;
use Dingo\Api\Routing\Router;

$api = app(Router::class);

$api->version('v1', ['middleware' => ['bindings']], function ($api) {

    $api->get('tags', TagController::class . '@index');
    $api->get('categories', CategoryController::class . '@index');
    $api->get('articles', ['as' => 'articles.index', 'uses' => ArticleController::class . '@index']);
    $api->get('articles/{article}', ['as' => 'articles.show', 'uses' => ArticleController::class . '@show']);
});
