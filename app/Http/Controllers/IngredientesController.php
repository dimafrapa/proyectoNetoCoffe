<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ingrediente;

class IngredientesController extends Controller
{
  /**
   * Este metodo le manda todos los ingredientes a la vista que muestra la lista de ingredientes creados.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $ingredientes = Ingrediente::orderBy('nombre_ingrediente')->paginate(10);
      return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
  }

/**
*
* Este metodo sirve para crear y almacenar en la base de datos todos los ingredintes cuyos
* datos vienen empaquetados en la variable request.
**/
  public function store(Request $request){
    $ingrediente = new Ingrediente();
    $ingrediente->nombre_ingrediente=strtoupper($request->nombre_ingrediente);
    $ingrediente->unidad_medida=$request->unidad_medida;
    $ingrediente->cantidad_ingrediente=$request->cantidad_ingrediente;
    $ingrediente->costo_supermercado_ingrediente=$request->costo_supermercado_ingrediente;

    $ingrediente->save();

    $ingredienteAuxiliar = new Ingrediente();
    return view('admin.ingredientes.create')->with('ingrediente',$ingredienteAuxiliar);
  }

  /**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
  public function destroy($id){
    $ingrediente = Ingrediente::find($id);
    $ingrediente->delete();

    return redirect()->route('admin.ingredientes.index');
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina para crear un ingrediente el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
  public function create()
  {
      $ingrediente = new Ingrediente();
      return view('admin.ingredientes.create')->with('ingrediente',$ingrediente);
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
    public function show()
  {
      $ingredientes = Ingrediente::orderBy('nombre_ingrediente')->paginate(10);
      return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
  }
}
