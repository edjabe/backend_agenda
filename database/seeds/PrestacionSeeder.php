<?php

use Illuminate\Database\Seeder;

class PrestacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Medicina general"
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Odontología"
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Oftalmología"
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Pediatría"
        ]);
    }
}
