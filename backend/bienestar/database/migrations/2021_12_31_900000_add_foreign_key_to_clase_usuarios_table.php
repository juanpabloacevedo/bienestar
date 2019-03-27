<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToClaseUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clase_usuarios', function (Blueprint $table) {
        $table->foreign('id_user','fk_users_ref_clase_usuarios')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        $table->foreign('id_clases','fk_clases_ref_clase_usuarios')->references('id')->on('clases')->onUpdate('cascade')->onDelete('restrict');
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
