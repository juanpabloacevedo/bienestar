<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToEspacioDeportivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('espacio_deportivos', function (Blueprint $table) {
		$table->foreign('id_user','fk_users_ref_espacio_deportivos')->references('id')->on('users')->onDelete('set null');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('fk_users_ref_espacio_deportivos');
    }
}
