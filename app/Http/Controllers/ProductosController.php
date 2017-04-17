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
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $productos = Producto::orderBy('nombre_completo_empleado')->paginate(10);
      return view('admin.productos.index')->with('productos',$productos);
  }

  public function store(Request $request){

    $producto = new Producto();
    $producto->nombre_producto=strtoupper($request->nombre_producto);
    $producto->precio_de_venta=$request->precio_de_venta;

    $ingredientes = Ingrediente::all();
    $lista_id_ingredientes = '';
    $contador=0;
        foreach ($request->lista_ingredientes as $nombre) {
          foreach ($ingredientes as $ingrediente) {
                    
            if($ingrediente->nombre_ingrediente == $nombre){

                $lista_id_ingredientes = $lista_id_ingredientes + $ingrediente->id_ingrediente + ';' + $request->cantidades[$contador] + ';';
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

  public function destroy($id){
    $producto = Producto::find($id);
    $producto->delete();

    return redirect()->route('admin.productos.index');
  }

  public function create()
  {
      $producto = new Producto();
      $ingredientes =DB::table('ingredientes')->select('ingredientes.*')->
            orderBy('nombre_ingrediente','asc')->get();
      return view('admin.productos.create')->with('producto',$producto)->with('ingredientes',$ingredientes);
  }

    public function show()
  {
      $productos = Producto::orderBy('nombre_producto')->paginate(10);
      return view('admin.productos.index')->with('productos',$productos);
  }

}
