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
            $table->id();
            $table->decimal('monto',5 ,2); 
            $table->decimal('iva',5 ,2);
            $table->decimal('total',5 ,2);
            $table->string('rol', 45);
            $table->string('nombre_producto', 45);
            $table->integer('cantidad', 3);
            $table->decimal('costo',5 ,2);
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
