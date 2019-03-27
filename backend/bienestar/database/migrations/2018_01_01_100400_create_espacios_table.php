<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_espacio');
            $table->integer('cantidad_usuarios')->default(30);
            $table->boolean('espacio_disponible');            
        /**llave foranea de espacios a sedes */
            $table->integer('id_sede')->unsigned();
            $table->foreign('id_sede')->references('id_sede')->on('sedes');
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
        Schema::dropIfExists('espacios');
    }
}
