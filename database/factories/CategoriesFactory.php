<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categories;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Categories::class, function (Faker $faker) {
    $name = $faker->word;
    $slug = str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
    ];
});
