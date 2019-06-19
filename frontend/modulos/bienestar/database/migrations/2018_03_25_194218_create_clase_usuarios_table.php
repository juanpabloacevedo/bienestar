<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaseUsuariosTable extends Migration{
            public function up()
        {
            Schema::create('clase_usuarios', function (Blueprint $table) {
                $table->increments('id');
                /**Entidad devil ,llave foranea de clase_usuarios a user */
                $table->integer('id_user')->unsigned();
                /**Entidad devil ,llave foranea de clase_usuarios a clases */
                $table->integer('id_clase')->unsigned();
                $table->timestamps();
            });
        }
          public function down()
        {
            Schema::dropIfExists('clase_usuarios');
        }
}
