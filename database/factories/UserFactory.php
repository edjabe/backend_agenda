<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'nombres' => $faker->firstName,
        'apellidos' => $faker->lastName,
        'telefono' => $faker->phoneNumber,
        'direccion' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'usuario' => $faker->name,
        'password' => bcrypt("prueba2019"),
        'remember_token' => Str::random(10),
    ];
});
