<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparacion extends Model
{
    protected $table="preparaciones";
    protected  $fillable=[
        'minutos','costo_total',
    ];

    	public function metodo(){
        return $this->belongsTo('App\Metodo');

        public function preparacion(){
        return $this->belongsTo('App\Preparacion');
    }
}
