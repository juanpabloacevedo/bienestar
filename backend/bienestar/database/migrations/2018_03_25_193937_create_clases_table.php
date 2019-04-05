<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('cupos')->default(30);
            $table->boolean('disponible');
            
        /**llave foranea de clases a espaciosdeportivos*/
            $table->integer('id_espacio')->unsigned();
            
        /**llave foranea a usuarios */
        $table->integer('id_user')->unsigned();
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
        Schema::dropIfExists('clases');
    }
}
