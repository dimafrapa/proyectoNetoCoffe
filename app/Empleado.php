<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table="empleados";
    protected  $fillable=[
        'cantidad_horas','valor_horas',
    ];

	public function preparacion(){
        return $this->hashMany('App\Preparacion');

}
