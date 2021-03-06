@extends('layouts.app')

@section('htmlheader_title')
  Baristas
@endsection


@section('main-content')
  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Experiencia</th>
        <th>Cursos</th>
        <th>Estudios</th>
        <th>Certificaciones</th>
        <th>Competencias</th>
        <th>Rango</th>
      </tr>
    </thead>
    <tbody>
      @foreach($baristas as $barista)
        <tr>
          <td>{{$barista->nombre_completo_empleado}}</td>
          <td>{{$barista->cedula}}</td>
          <td>{{$barista->telefono}}</td>
          <td>{{$barista->direccion}}</td>
          <td>{{$barista->anos_experiencia}}</td>
          <td>{{$barista->num_cursos}}</td>
          <td>{{$barista->num_estudios_profesionales}}</td>
          <td>{{$barista->num_certificaciones}}</td>
          <td>{{$barista->num_asistencia_competencias}}</td>
          <td>{{$barista->rango_barista}}</td>
          <td>
              <a href="{{ route('admin.baristas.destroy',$barista->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminarlo?')">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $baristas->render() !!}

@endsection
