<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * @property mixed nombre
 */
class Producto extends Model
{
    protected $table="productos";
    protected  $fillable=[
        'nombre_producto',
    ];
   	public function ingrediente(){
        return $this->hashMany('App\Ingrediente');
    }
}