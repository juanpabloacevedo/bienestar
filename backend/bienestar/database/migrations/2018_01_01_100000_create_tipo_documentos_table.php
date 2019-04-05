<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_documento',32)->unique();
            $table->string('sigla',12)->nullable();
            $table->timestamps();
        });
        DB::table('tipo_documentos')->insert(
            array(
                ['nombre_documento' => 'Cedula de Ciudadania','sigla'=>'CC'],
                ['nombre_documento' => 'Tarjeta de Identidad','sigla'=>'TI'],               
            )
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_documentos');
    }
}