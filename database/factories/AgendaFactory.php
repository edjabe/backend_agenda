<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agenda;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\Agenda::class, function (Faker $faker) {
    $fecha_raiz = $faker->dateTimeBetween($startDate = 'now', $endDate = '2019-12-31');
	$fecha_raiz = date_format($fecha_raiz, 'Y-m-d');
	$hora_inicial = Carbon::parse($fecha_raiz . " 06:30:00");
	$hora_final = Carbon::parse($fecha_raiz . " 06:30:00")->addHour(12);
    return [
        "dia" => $fecha_raiz,
        "hora_inicial" => $hora_inicial->format('Y-m-d H:i:s'),
        "hora_final" => $hora_final->format('Y-m-d H:i:s'),
        "intervalos" => function () use ($hora_inicial, $hora_final, $faker) {
        	$intervalos = [];
        	$turnos = $faker->randomFloat(0, 5, 10);
        	$i = 0;

        	while($hora_inicial->lte($hora_final) && $i < $turnos) {
        		$hora_inicial = $hora_inicial->addMinutes(60);
        		$intervalos[] = $hora_inicial->format('Y-m-d H:i:s');
        		$i++;
        	}

        	return json_encode($intervalos);
        },
        "prestacion_id" => App\Models\Prestacion::all()->random()->id
    ];
});
