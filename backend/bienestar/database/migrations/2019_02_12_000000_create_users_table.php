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
            $table->integer('id_rol')->unsigned()->default(2);
            $table->foreign('id_rol')->references('id')->on('rols');
            //
            $table->integer('id_doc')->unsigned()->default(1);
            $table->foreign('id_doc')->references('id')->on('tipo_documentos');
            $table->string('numero_documento',32)->nullable();
            //
            $table->integer('id_asistencia')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                'name' => 'administrador',
                'apellido'=>'ustaTunja',
                'email'=>'admin@example.com',
                'password'=>'$2y$10$7QK7St.L9T5ialpAtfKRVOG/bfVwfVqWTPkJtNh1O0j6YnqdYfWWu',
                'id_rol'=>'1',
                'id_doc'=>'1',
                'apellido'=>'1',
            )
        );
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
