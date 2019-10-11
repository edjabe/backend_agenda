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
            "nombre" => "Medicina general",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Odontologia",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Oftalmologia",
            "sede_id" => 2
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Pediatria",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Pediatria",
            "sede_id" => 2
        ]);
    }
}
