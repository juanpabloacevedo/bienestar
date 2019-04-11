<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('aprobado');
            $table->boolean('canecelado');
            $table->boolean('reservado');
            /**llave foranea de espacios a sedes */
            $table->integer('id_reserva')->nullable();
            $table->foreign('id_reserva')->references('id')->on('reservas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
