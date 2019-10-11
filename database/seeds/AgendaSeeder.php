<?php

use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sede = factory(App\Models\Agenda::class,20)->create();
    }
}
