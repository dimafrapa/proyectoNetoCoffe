<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected  $fillable=[
        'unidad_medida','cantidad',
    ];

    public function ingrediente(){
        return $this->hashOne('App\Ingrediente');
}
