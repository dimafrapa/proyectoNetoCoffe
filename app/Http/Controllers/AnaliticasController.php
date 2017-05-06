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

class AnaliticasController extends Controller
{

  public function store(Request $request){
    if($request->nivel_barista =  'Nivel 1'){

      $costo_nivel_barista = 200;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 2'){
      $costo_nivel_barista = 400;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 3'){
      $costo_nivel_barista = 600;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();
      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 4'){
      $costo_nivel_barista = 800;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

            $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 5'){
      $costo_nivel_barista = 1000;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 6'){
      $costo_nivel_barista = 1200;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 7'){
      $costo_nivel_barista = 1400;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 8'){
      $costo_nivel_barista = 1600;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 9'){
      $costo_nivel_barista = 1800;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }elseif($request->nivel_barista =  'Nivel 10'){
      $costo_nivel_barista = 2000;
      $costo_extra_metodo_tradicional = 250;

      $producto =DB::table('productos')->where('productos.nombre_producto','=',$request->nombre_producto)
            ->select('productos.*')->get();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('producto',$producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }else{
      return ("ocurrio un error");
    }
      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      return view('admin.tablas.index')->with('productos',$productos)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);
  }

  public function show()
  {
      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_nivel_barista = 0;
      $costo_extra_metodo_tradicional = 0;

      return view('admin.analiticas.index')->with('productos',$productos)->with('metodos',$metodos)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);
  }

}
