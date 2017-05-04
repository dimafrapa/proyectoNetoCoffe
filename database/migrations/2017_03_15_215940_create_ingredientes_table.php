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
            $table->increments('id');
            $table->string('nombre_ingrediente');
            $table->string('unidad_medida');
            $table->integer('cantidad_ingrediente');
            $table->bigInteger('costo_supermercado_ingrediente');
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
