<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Models\User::class)->create([
            "nombres" => "Nuevo",
            "apellidos" => "Administrador",
            "usuario" => "administrador",
            "email" => "administrador@agenda.com",
        ]);

        $user = factory(App\Models\User::class)->create([
            "nombres" => "Ricardo",
            "apellidos" => "Proyectos",
            "usuario" => "ricardo",
            "email" => "ricardo@agenda.com",
        ]);

        $user = factory(App\Models\User::class)->create([
            "nombres" => "Jose",
            "apellidos" => "Pulgarin",
            "usuario" => "jpulgarin",
            "email" => "jpulgarin@agenda.com",
        ]);
    }
}
