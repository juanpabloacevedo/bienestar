<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->dateTime('inicio');
            $table->dateTime('fin');
            /**llave foranea de reservas a estados */
            $table->integer('id_estado')->unsigned();
            /**llave foranea de reservas a espacios deportivos */
            $table->integer('id_espacio')->unsigned();
            /**llave foranea de reservas a clases */
            $table->integer('id_clase')->unsigned();
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
        Schema::dropIfExists('reservas');
    }
}
