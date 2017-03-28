<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_empleado');
            $table->string('nombre_empleado');
            $table->string('horas_trabajadas');
            $table->string('precio_hora');
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
        Schema::drop('empleados');
    }
}
