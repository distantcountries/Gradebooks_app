<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Professor;
use Faker\Generator as Faker;

$factory->define(Professor::class, function (Faker $faker) {

    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
    ];
});

