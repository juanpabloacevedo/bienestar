<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspacioDeportivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacio_deportivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            
        /**llave foranea de espacios_deportivos a user */
            $table->integer('id_user')->unsigned();
            $table->timestamps();
            
        });
    }
    public function down()
    {
        Schema::dropIfExists('espacio_deportivos');
    }
}
