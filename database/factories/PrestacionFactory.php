<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prestacion;
use Faker\Generator as Faker;

$factory->define(App\Models\Prestacion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->cityPrefix
    ];
});
