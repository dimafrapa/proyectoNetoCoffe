<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('metodos', function (Blueprint $table) {
            $table->increments('id_metodo');
            $table->string('nombre_metodo');
            $table->string('costo_adicional');
            $table->timestamps();
        });

            Schema::table('metodos', function ($table) {
            $table->integer('metodo_id')->unsigned();
            $table->foreign('metodo_id')->references('id_metodo')->on('metodos');
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

