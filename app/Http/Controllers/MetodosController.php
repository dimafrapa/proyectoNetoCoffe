<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Metodo;

class MetodosController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $metodos = Metodo::orderBy('nombre_metodo')->paginate(10);
      return view('admin.metodos.index')->with('metodos',$metodos);
  }

  public function store(Request $request){
    $metodo = new Metodo();
    $metodo->nombre_metodo=$request->nombre_metodo;
    $metodo->descripcion_metodo=$request->descripcion_metodo;
    $metodo->tiempo_aprox_metodo=$request->tiempo_aprox_metodo;
    $metodo->categoria_metodo=$request->categoria_metodo;

    $metodo->save();

    $metodoAuxiliar = new Metodo();
    return view('admin.metodos.create')->with('metodo',$metodoAuxiliar);
  }

  public function destroy($id){
    $metodo = metodo::find($id);
    $metodo->delete();

    return redirect()->route('admin.metodos.index');
  }

  public function create()
  {
      $metodo = new metodo();
      return view('admin.metodos.create')->with('metodo',$metodo);
  }

    public function show()
  {
      $metodos = Metodo::orderBy('nombre_metodo')->paginate(10);
      return view('admin.metodos.index')->with('metodos',$metodos);
  }

}
