<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Gradebook;
use Faker\Generator as Faker;

$factory->define(Gradebook::class, function (Faker $faker) {
    return [
        'content' => $faker->text(20),
    ];
});
