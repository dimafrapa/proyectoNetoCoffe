<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Barista;
use App\Ingrediente;
use App\Metodo;
use Illuminate\Support\Facades\DB;

class TablasController extends Controller
{

  public function store(Request $request){

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_nivel_barista = $request->costo_nivel_barista;
      $costo_extra_metodo_tradicional = $request->costo_extra_metodo_tradicional;

      return view('admin.tablas.index')->with('productos',$productos)->with('ingredientes',$ingredientes)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);
  }


  public function show()
  {
      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_nivel_barista = 0;
      $costo_extra_metodo_tradicional = 0;

      return view('admin.tablas.index')->with('productos',$productos)->with('ingredientes',$ingredientes)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);
  }

}
