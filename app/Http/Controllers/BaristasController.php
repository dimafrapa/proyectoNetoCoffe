<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use Laracasts\Flash\FlashProviders;
use App\Http\Controllers\Controller;
use App\Barista;
use Illuminate\Support\Facades\DB;

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
    $barista->nombre_completo_empleado=strtoupper($request->nombre_completo_empleado);
    $barista->cedula=$request->cedula;
    $barista->telefono=$request->telefono;
    $barista->direccion=strtoupper($request->direccion);
    $barista->anos_experiencia=$request->anos_experiencia;
    $barista->num_cursos=$request->num_cursos;
    $barista->num_estudios_profesionales=$request->num_estudios_profesionales;
    $barista->num_certificaciones=$request->num_certificaciones;
    $barista->num_asistencia_competencias=$request->num_asistencia_competencias;
    $barista->rango_barista=$request->rango_barista;

    $verificacion = false;
    $listaBaristas =DB::table('baristas')->select('baristas.cedula')->get();
    foreach ($listaBaristas as $baristaAuxiliar) {
      if($baristaAuxiliar->cedula == $request->cedula){
        $verificacion = true;
      }
    }
    if($verificacion == false){
      $barista->save();

      $porcentajeExperiencia = 0;
      $porcentajeCursos = 0;
      $porcentajeEstudiosProfesionales = 0;
      $porcentajeCertificaciones = 0;
      $porcentajeCompetencias = 0;

      $rangoBarista = 0;

      $baristaAuxiliar = new Barista();
      return view('admin.baristas.create')->with('barista',$baristaAuxiliar)->with('porcentajeExperiencia',$porcentajeExperiencia)->with('porcentajeCursos',$porcentajeCursos)->with('porcentajeEstudiosProfesionales',$porcentajeEstudiosProfesionales)->with('porcentajeCertificaciones',$porcentajeCertificaciones)->with('porcentajeCompetencias',$porcentajeCompetencias)->with('rangoBarista',$rangoBarista);
    }else{
      Flash::error('La cedula ' . $request->cedula . ' ya esta REGISTRADA');
      return redirect()->route('admin.baristas.create');
    }

  }

  /**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
  public function destroy($id){
    $barista = Barista::find($id);
    $barista->delete();
    return redirect()->route('admin.baristas.index');
  }

  public function create()
  {
      $barista = new Barista();
      $porcentajeExperiencia = 0;
      $porcentajeCursos = 0;
      $porcentajeEstudiosProfesionales = 0;
      $porcentajeCertificaciones = 0;
      $porcentajeCompetencias = 0;

      $rangoBarista = 0;
      return view('admin.baristas.create')->with('barista',$barista)->with('porcentajeExperiencia',$porcentajeExperiencia)->with('porcentajeCursos',$porcentajeCursos)->with('porcentajeEstudiosProfesionales',$porcentajeEstudiosProfesionales)->with('porcentajeCertificaciones',$porcentajeCertificaciones)->with('porcentajeCompetencias',$porcentajeCompetencias)->with('rangoBarista',$rangoBarista);
  }

/**
* Este metodo es usado solo para redireccionamiento. Cuando se desee mostrar la pagina el controlador ejecuta
* este metodo y retorna la vista correspodiente.
**/
    public function show()
  {
      $baristas = Barista::orderBy('nombre_completo_empleado')->paginate(10);
      return view('admin.baristas.index')->with('baristas',$baristas);
  }

/* Metodo para calcular el rango del barista teniendo en cuenta los porcentajes asignados a cada item
* de los datos de la experiencia laboral del empleado.
*/
  public function calcularRango(Request $request){
    $barista = new Barista();

    $barista->anos_experiencia=$request->anos_experiencia;
    $barista->num_cursos=$request->num_cursos;
    $barista->num_estudios_profesionales=$request->num_estudios_profesionales;
    $barista->num_certificaciones=$request->num_certificaciones;
    $barista->num_asistencia_competencias=$request->num_asistencia_competencias;
    $barista->rango_barista=$request->rango_barista;


    $porcentajeExperiencia = ($request->anos_experiencia*100)/10;
    $porcentajeCursos = ($request->num_cursos*100)/20;
    $porcentajeEstudiosProfesionales = ($request->num_estudios_profesionales*100)/4;
    $porcentajeCertificaciones = ($request->num_certificaciones*100)/10;
    $porcentajeCompetencias = ($request->num_asistencia_competencias*100)/20;

    $porcentajeRangoBarista = ($porcentajeExperiencia*0.5) + ($porcentajeCursos*0.1) + ($porcentajeEstudiosProfesionales*0.05) + ($porcentajeCertificaciones*0.25) + ($porcentajeCompetencias*0.1);
    $rangoBarista = intval(($porcentajeRangoBarista*10)/100);

    return view('admin.baristas.create')->with('barista',$barista)->with('porcentajeExperiencia',$porcentajeExperiencia)->with('porcentajeCursos',$porcentajeCursos)->with('porcentajeEstudiosProfesionales',$porcentajeEstudiosProfesionales)->with('porcentajeCertificaciones',$porcentajeCertificaciones)->with('porcentajeCompetencias',$porcentajeCompetencias)->with('rangoBarista',$rangoBarista);
  }

}
