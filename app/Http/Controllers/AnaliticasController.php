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

/**
*
* En este metodo se van a hacer todos los calculos referentes a la relaciones de café, dependiendo de los
* niveles del barista, el tipo de producto y el metodo por el cual se va a preparar, el costo puede variar
* significativamente.
*
**/
  public function store(Request $request){

/**
* Condicion if ppara cuando se selecciona un barista de nivel 1
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista ==  'Nivel 1' ){

      $costo_nivel_barista = 100;

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 2
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 2'){

      $costo_nivel_barista = 400;


      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }
    

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 3
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 3'){

      $costo_nivel_barista = 600;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 4
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 4'){
      $costo_nivel_barista = 800;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 5
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 5'){
      
      $costo_nivel_barista = 1000;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 6
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 6'){
      $costo_nivel_barista = 1200;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 7
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 7'){
      $costo_nivel_barista = 1400;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 8
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 8'){
      $costo_nivel_barista = 1600;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 9
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 9'){
      $costo_nivel_barista = 1800;
      

      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }

/**
* Condicion if ppara cuando se selecciona un barista de nivel 10
* Se encuentra el prroducto seleccionado y se le envian a la vista los siguientes datos:
* el producto, la lista de productos, la lista de ingredientes, la lista de metodos y los costos extras por barista
* y metodo.
*/
    if($request->nivel_barista == 'Nivel 10'){
      $costo_nivel_barista = 2000;
      
      
      if($request->nombre_metodo ==  'Artesanal'){
        $costo_extra_metodo_tradicional = 300;
      }

      if($request->nombre_metodo ==  'Prensa Francesa'){
        $costo_extra_metodo_tradicional = 700;
      }

      if($request->nombre_metodo ==  'Chemex'){
        $costo_extra_metodo_tradicional = 700;
      }


      if($request->nombre_metodo ==  'Sifon'){
        $costo_extra_metodo_tradicional = 900;
      }

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $costo_anterior = $request->costo_anterior;
      $costo_actual = $request->costo_actual;

      return view('admin.analiticas.index')->with('metodos',$metodos)->with('productosAuxiliares',$productosAuxiliares)->with('productos',$productos)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$request->nombre_producto)->with('ingredientes',$ingredientes)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);

    }
}

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
  public function show()
  {
      $productos =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $productosAuxiliares =DB::table('productos')->select('productos.*')->
            orderBy('nombre_producto','asc')->get();

      $metodos =DB::table('metodos')->select('metodos.*')->
            orderBy('nombre_metodo','asc')->get();

      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();

      $costo_nivel_barista = 0;
      $costo_extra_metodo_tradicional = 0;

      $producto = new Producto();

      $costo_anterior = 0;
      $costo_actual = 0;
      $nombre_productoAuxiliar = '';

      return view('admin.analiticas.index')->with('ingredientes',$ingredientes)->with('costo_anterior',$costo_anterior)->with('costo_actual',$costo_actual)->with('nombre_productoAuxiliar',$nombre_productoAuxiliar)->with('productos',$productos)->with('productosAuxiliares',$productosAuxiliares)->with('metodos',$metodos)->with('costo_nivel_barista',$costo_nivel_barista)->with('costo_extra_metodo_tradicional',$costo_extra_metodo_tradicional);
  
  }

}
