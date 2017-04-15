<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo extends Model
{
    protected $table="metodos";
    protected  $fillable=[
        'nombre_metodo','descripcion_metodo','tiempo_aprox_metodo','categoria_metodo',
    ];
}
