<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Car;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->words(1, true),
        'model' => $faker->words(1, true),
        'year' => $faker->year(),
        'maxSpeed' => $faker->numberBetween(50, 250),
        'isAutomatic' => $faker->boolean(),
        'engine' => $faker->numberBetween(100, 250),
        'numberOfDoors' => $faker->numberBetween(2, 5)
    ];
});
