<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredienteTable extends Migration
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
            $table->string('costo_supermercado');
            $table->timestamps();
        });

          Schema::table('ingredientes', function ($table) {
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id_producto')->on('productos');
        });

        Schema::table('ingredientes', function ($table) {
            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id_tipo')->on('tipos');
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
