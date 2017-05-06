<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Ingrediente;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
  /**
   * Este metodo se encarga de buscar todos los productos creados y se los manda a la vista index de ingredientes
   * para que genere la tabla de productos.
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $productos = Producto::orderBy('nombre_producto')->paginate(10);
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();
            
      return view('admin.productos.index')->with('productos',$productos)->with('ingredientes',$ingredientes);
  }

/**
*
* Este metodo se encarga de crear un nuevo producto seteandole los valores de la variable temporal request y luego guarda ese
* registro en la base de datos.
*
**/
  public function store(Request $request){

    $producto = new Producto();
    $producto->nombre_producto=strtoupper($request->nombre_producto);
    $producto->precio_de_venta=$request->precio_de_venta;

    $ingredientes = Ingrediente::all();
    $lista_id_ingredientes = '';
    $contador=0;

/**
*
* este foreach se usa para encontrar el id de todos los ingredientes de este producto y luego los guarda en una variable string
* que se le es guardad al producto.
**/
        foreach ($request->lista_ingredientes as $nombre) {
          foreach ($ingredientes as $ingrediente) {
                    
            if($ingrediente->nombre_ingrediente == $nombre){

                $lista_id_ingredientes = $lista_id_ingredientes . $ingrediente->id . ';' . $request->cantidades[$contador] . ';';
            }
          }
          $contador = $contador+1;
        }



    $producto->ingredientes_del_producto=$lista_id_ingredientes;
    
    $producto->save();

    $productoAuxiliar = new Producto();
    $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();
    return view('admin.productos.create')->with('producto',$productoAuxiliar)->with('ingredientes',$ingredientes);
  }

/**
* Este metodo es usado para encontrar y eliminar los productos de la base de datos.
*
**/

  public function destroy($id){
    $producto = Producto::find($id);
    $producto->delete();

    return redirect()->route('admin.productos.index');
  }
  
/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina de crear un producto el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/

  public function create()
  {
      $producto = new Producto();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();
      return view('admin.productos.create')->with('producto',$producto)->with('ingredientes',$ingredientes);
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
    public function show()
  {
      $productos = Producto::orderBy('nombre_producto')->paginate(10);
      return view('admin.productos.index')->with('productos',$productos);
  }

}
