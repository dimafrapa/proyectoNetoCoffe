<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Metodo;

class MetodosController extends Controller
{
  /**
   * Este metodo le manda a la tabla de todos los metodos, los metodos creados en la base de datos.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $metodos = Metodo::orderBy('nombre_metodo')->paginate(10);
      return view('admin.metodos.index')->with('metodos',$metodos);
  }

/**
*
* Este metodo es para guardar en la base de datos el metodo que viene empaquetado en la variable request.
*
**/
  public function store(Request $request){
    $metodo = new Metodo();
    $metodo->nombre_metodo=strtoupper($request->nombre_metodo);
    $metodo->descripcion_metodo=strtoupper($request->descripcion_metodo);
    $metodo->tiempo_aprox_metodo=$request->tiempo_aprox_metodo;
    $metodo->categoria_metodo=$request->categoria_metodo;

    $metodo->save();

    $metodoAuxiliar = new Metodo();
    return view('admin.metodos.create')->with('metodo',$metodoAuxiliar);
  }

/**
* Este metodo es para eliminar los metodos de la base de datos, recibe como parametro el id del metodo
* luego lo busca en la base de datos y cuando lo encuentre borra el registro.
**/
  public function destroy($id){
    $metodo = metodo::find($id);
    $metodo->delete();

    return redirect()->route('admin.metodos.index');
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina de crear un metodo de preparacion el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
  public function create()
  {
      $metodo = new metodo();
      return view('admin.metodos.create')->with('metodo',$metodo);
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
    public function show()
  {
      $metodos = Metodo::orderBy('nombre_metodo')->paginate(10);
      return view('admin.metodos.index')->with('metodos',$metodos);
  }

}
