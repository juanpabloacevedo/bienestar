<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservas', function (Blueprint $table) {
        $table->foreign('id_estado','fk_estado_ref_reservas')->references('id')->on('estados')->onUpdate('cascade')->onDelete('restrict');
        $table->foreign('id_espacio','fk_espacio_ref_reservas')->references('id')->on('espacios')->onUpdate('cascade')->onDelete('restrict');
        $table->foreign('id_clase','fk_clase_ref_reservas')->references('id')->on('clases')->onUpdate('cascade')->onDelete('restrict');
    });
    }
    public function down()
    {
         Schema::dropIfExists('fk_estado_ref_reservas');
         Schema::dropIfExists('fk_espacio_ref_reservas');
         Schema::dropIfExists('fk_clase_ref_reservas');
    }
    
}
