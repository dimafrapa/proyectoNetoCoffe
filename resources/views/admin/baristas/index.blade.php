@extends('layouts/partials/sidebar')

@section('title')
  Lista de Baristas
@endsection

@section('content')

  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Años experiencia</th>
        <th>Cursos</th>
        <th>Estudios Profesionales</th>
        <th>Certificaciones</th>
        <th>Competencias</th>
        <th>Dirección</th>
        <th>Rango</th>
      </tr>
    </thead>
    <tbody>
      @foreach($baristas as $barista)
        <tr>
          <td>{{$barista->id_barista}}</td>
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
          <td><a href=" {{ route('netocafe.baristas.edit',$barista->id_barista) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('netocafe.baristas.destroy',$barista->id_barista) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $baristas->render() !!}

@endsection
