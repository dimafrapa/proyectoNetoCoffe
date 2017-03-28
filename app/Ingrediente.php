<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
        protected $table="ingredientes";
    protected  $fillable=[
        'nombre_ingrediente','costo_supermercado',
    ];
    public function producto(){
        return $this->belongsTo('App\Producto');
    }

    public function tipo(){
        return $this->belongsTo('App\Tipo');
    }
}
