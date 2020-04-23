<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Song;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Song::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'other_name' => $faker->name,
        'thumbnail' => $faker->imageUrl(),
        'url' => $faker->url,
        'year' => $faker->year,
        'views' => $faker->randomNumber(),
        'category_id' => \App\Models\Category::inRandomOrder()->first('id')->id,
    ];
});
