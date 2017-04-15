<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('ingredientes', function (Blueprint $table) {
            $table->increments('id_ingrediente');
            $table->string('nombre_ingrediente');
            $table->string('unidad_medida');
            $table->integer('cantidad_ingrediente');
            $table->integer('costo_supermercado_ingrediente');
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
        Schema::drop('ingredientes');
    }
}