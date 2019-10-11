<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sede;
use Faker\Generator as Faker;

$factory->define(App\Models\Sede::class, function (Faker $faker) {
    return [
        'nombre' => $faker->cityPrefix,
        'telefono' => $faker->phoneNumber,
        'direccion' => $faker->address
    ];
});
