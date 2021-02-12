<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->word;
    $slug = str::slug($title);
    // $getImage = $faker->image('public/images',500,400, null, false);
    return [
        'categories_id' => factory('App\Categories')->create()->id,
        'title' => $title,
        'slug' => $slug,
        'short_description' => $faker->sentence,
        'content' => $faker->paragraph,
        'image' => $faker->image('public/image',500,400, null, false),
        'thumbnail' => $faker->image('public/thumbnail', 200, 100, null, false),
    ];
});
