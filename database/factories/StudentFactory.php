<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'image' => $faker->imageUrl()
    ];
});
