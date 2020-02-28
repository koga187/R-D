<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(App\Quotes::class, function (Faker $faker) {
    return [
        "from" => $faker->from,
        "to" => $faker->to,
        "price" => $faker->price,
        "created_at" => $faker->create_at
    ];
});
