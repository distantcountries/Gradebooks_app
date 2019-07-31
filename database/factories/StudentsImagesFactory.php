<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\StudentImage;
use Faker\Generator as Faker;

$factory->define(StudentImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(),
        'student_id' => $faker->numberBetween(1, 100)
    ];
});
