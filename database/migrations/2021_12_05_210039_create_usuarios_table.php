<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->decimal('sueldo',5 ,2); 
            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45);
            $table->string('nombre', 45);
            $table->date('fecha_nacimiento');
            $table->string('rol', 45);
            $table->string('email')->unique();
            $table->string('password', 45);
            $table->integer('direccion'); 
            $table->foreign('direccion')->references('id')->on('direcciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
