<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Gradebook;
use Faker\Generator as Faker;

$factory->define(Gradebook::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'professor_id' => $faker->unique()->numberBetween(1, 30)
    ];
});
