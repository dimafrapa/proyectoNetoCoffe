<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ingrediente;

class IngredientesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $ingredientes = Ingrediente::orderBy('nombre_ingrediente')->paginate(10);
      return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
  }

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

  public function destroy($id){
    $ingrediente = Ingrediente::find($id);
    $ingrediente->delete();

    return redirect()->route('admin.ingredientes.index');
  }

  public function create()
  {
      $ingrediente = new Ingrediente();
      return view('admin.ingredientes.create')->with('ingrediente',$ingrediente);
  }

    public function show()
  {
      $ingredientes = Ingrediente::orderBy('nombre_ingrediente')->paginate(10);
      return view('admin.ingredientes.index')->with('ingredientes',$ingredientes);
  }
}
