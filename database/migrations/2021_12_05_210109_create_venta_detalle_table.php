<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->smallIncrements('venta_id');
            $table->smallIncrements('producto_id'); 
            $table->smallIncrements('productos_vendidos');
            $table->decimal('precio', 5 ,2 );
            $table->date('fecha');
            $table->smallIncrements('usuario'); 
            $table->foreign('usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_detalle');
    }
}
