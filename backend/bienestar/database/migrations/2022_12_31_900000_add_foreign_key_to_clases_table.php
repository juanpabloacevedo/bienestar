<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clases', function (Blueprint $table) {
        $table->foreign('id_user','fk_users_ref_users')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_espacio','fk_clases_ref_espacios_deportivos')->references('id')->on('espacio_deportivos')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('fk_users_ref_clase_usuarios');
    }
    
}
