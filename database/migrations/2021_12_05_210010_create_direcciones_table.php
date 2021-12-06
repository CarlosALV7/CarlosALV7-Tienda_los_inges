<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->smallIncrements('direccion_id');
            $table->string('colonia', 45);
            $table->string('calle', 45);
            $table->integer('no_exterior', 10);
            $table->integer('no_interior', 10);
            $table->integer('codigo_postal', 5);
            $table->smallIncrements('estado_id'); 
            $table->smallIncrements('municipio_id'); 
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->foreign('municipio_id')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
