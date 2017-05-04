<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('baristas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo_empleado');
            $table->bigInteger('cedula');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->integer('anos_experiencia');
            $table->integer('num_cursos');
            $table->integer('num_estudios_profesionales');
            $table->integer('num_certificaciones');
            $table->integer('num_asistencia_competencias');
            $table->integer('rango_barista')->length(11);
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
        Schema::drop('baristas');
    }
}
