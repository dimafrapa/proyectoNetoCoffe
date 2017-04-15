<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
        protected $table="ingredientes";
    protected  $fillable=[
        'nombre_ingrediente','unidad_medida','cantidad_ingrediente','costo_supermercado_ingrediente',
    ];
}
