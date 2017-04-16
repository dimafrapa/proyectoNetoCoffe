<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Ingrediente;

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
    $producto->nombre_producto=$request->nombre_producto;
    $producto->precio_de_venta=$request->precio_de_venta;
    $producto->ingredientes_del_producto="nada por ahora";

    $producto->save();

    $productoAuxiliar = new Producto();
    return view('admin.productos.create')->with('producto',$productoAuxiliar);
  }

  public function destroy($id){
    $producto = Producto::find($id);
    $producto->delete();

    return redirect()->route('admin.productos.index');
  }

  public function create()
  {
      $producto = new Producto();
      $ingredientes = Ingrediente::orderBy('nombre_ingrediente');
      return view('admin.productos.create')->with('producto',$producto)->with('ingredientes',$ingredientes);
  }

    public function show()
  {
      $productos = Producto::orderBy('nombre_producto')->paginate(10);
      return view('admin.productos.index')->with('productos',$productos);
  }

}
