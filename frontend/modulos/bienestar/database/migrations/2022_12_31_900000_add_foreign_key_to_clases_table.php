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
        $table->foreign('id_espacio','fk_espacio_ref_clases')->references('id')->on('espacio_deportivos')->onDelete('cascade');
        $table->foreign('id_periodo','fk_periodo_ref_clases')->references('id')->on('periodos')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('fk_espacio_ref_clases');
         Schema::dropIfExists('fk_periodo_ref_clases');
    }
    
}
