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
            $table->string('apellido');
            $table->string('codigo')->nullable();
            $table->string('celular')->nullable();
            $table->string('usuario')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto',255)->nullable();
            $table->boolean('activo')->default(true);
            $table->boolean('sancionado')->default(false);
            //
            $table->integer('id_rol')->nullable()->default(2);
            $table->foreign('id_rol')->references('id')->on('rols');
            //
            $table->integer('id_doc')->unsigned()->default(1);
            $table->foreign('id_doc')->references('id')->on('tipo_documentos');
            $table->string('numero_documento',32)->nullable();
            //
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
