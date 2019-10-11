<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prestacion_id')->unsigned();
            $table->date('dia');
            $table->timestamp('hora_inicial')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('hora_final')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('intervalos');
            $table->boolean('disponible')->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('prestacion_id')->references('id')->on('prestaciones');
            $table->unique(array('dia', 'prestacion_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
