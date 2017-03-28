<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreparacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('preparaciones', function (Blueprint $table) {
            $table->increments('id_preparacion');
            $table->string('tiempo_minutos');
            $table->string('costo_total_neto');
            $table->string('costo_total_venta');
            $table->timestamps();
        });

            Schema::table('preparaciones', function ($table) {
            $table->integer('metodo_id')->unsigned();
            $table->foreign('metodo_id')->references('id_metodo')->on('metodos');
        });

            Schema::table('preparaciones', function ($table) {
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id_empleado')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('preparaciones');
    }
}
