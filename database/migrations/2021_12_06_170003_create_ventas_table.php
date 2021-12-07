<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID de la venta');
            $table->decimal('monto',6,2);
            $table->decimal('iva',10,2);
            $table->decimal('total',10,2);
            $table->string('rol',45);
            $table->string('nombre_producto',45);
            $table->mediumInteger('cantidad');
            $table->decimal('costo',20,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
