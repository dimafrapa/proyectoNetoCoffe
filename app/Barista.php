<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barista extends Model
{
    protected $table="baristas";
    protected  $fillable=[
        'nombre_completo_empleado','cedula','telefono','direccion','anos_experiencia','num_cursos','num_estudios_profesionales','num_certificaciones','num_asistencia_competencias','rango_barista',
    ];

}
