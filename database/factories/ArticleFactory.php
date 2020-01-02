<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $parsedown = new Parsedown();
    $content = '# Hello';

    return [
        'title' => $faker->title(),
        'descript' => $faker->sentence(),
        'markdown_content' => $content,
        'html_content' => $parsedown->text($content),
    ];
});
