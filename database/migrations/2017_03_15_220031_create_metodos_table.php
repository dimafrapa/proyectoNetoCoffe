<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('metodos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_metodo');
            $table->longText('descripcion_metodo');
            $table->integer('tiempo_aprox_metodo')->length(300);
            $table->integer('categoria_metodo')->length(11);
            $table->integer('costo_extra')->length(300);
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
        Schema::drop('metodos');
    }
}
