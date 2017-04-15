<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Barista;

class BaristasController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $baristas = Barista::orderBy('nombre_completo_empleado')->paginate(10);
      return view('admin.baristas.index')->with('baristas',$baristas);
  }

  public function store(Request $request){
    $barista = new Barista();
    $barista->nombre_completo_empleado=$request->nombre_completo_empleado;
    $barista->cedula=$request->cedula;
    $barista->telefono=$request->telefono;
    $barista->direccion=$request->direccion;
    $barista->anos_experiencia=$request->razonanos_experienciaSocial;
    $barista->num_cursos=$request->num_cursos;
    $barista->num_estudios_profesionales=$request->num_estudios_profesionales;
    $barista->num_certificaciones=$request->num_certificaciones;
    $barista->num_asistencia_competencias=$request->num_asistencia_competencias;
    $barista->rango_barista=$request->rango_barista;

    $barista->save();

    return redirect()->route('netocafe.baristas.index');
  }
      public function destroy($id_barista){
      $barista = Barista::find($id_barista);
      $barista->delete();

      return redirect()->route('netocafe.baristas.index');
      }

}
