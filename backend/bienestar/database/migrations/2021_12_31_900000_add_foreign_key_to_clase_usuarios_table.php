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
        $table->foreign('id_user','fk_users_ref_clase_usuarios')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_clase','fk_clases_ref_clase_usuarios')->references('id')->on('clases')->onDelete('cascade');
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
         Schema::dropIfExists('fk_clases_ref_clase_usuarios');
    }
    
}
