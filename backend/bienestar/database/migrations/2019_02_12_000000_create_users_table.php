<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            
            //
            $table->integer('id_rol')->unsigned()->default(2);
            $table->foreign('id_rol')->references('id')->on('rols');
            //
            $table->integer('id_doc')->unsigned()->default(1);
            $table->foreign('id_doc')->references('id')->on('tipo_documentos');
            //
            $table->integer('id_asistencia')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
