<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metodo extends Model
{
    protected $table="metodos";
    protected  $fillable=[
        'nombre_metodo','costo_extra',
    ];

    	public function preparacion(){
        return $this->hashMany('App\Preparacion');
    }

