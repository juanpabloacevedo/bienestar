<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asistencias', function (Blueprint $table) {
		$table->foreign('id_user','fk_users_ref_asistencias')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_reserva','fk_clases_ref_asistencias')->references('id')->on('reservas')->onDelete('cascade');
		
    });
    }
    public function down()
    {
         Schema::dropIfExists('fk_users_ref_asistencias');
         Schema::dropIfExists('fk_reservas_ref_asistencias');
    }
}
