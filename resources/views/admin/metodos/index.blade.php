@extends('layouts.app')

@section('htmlheader_title')
  Métodos
@endsection


@section('main-content')
  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Tiempo</th>
        <th>Categoría</th>
      </tr>
    </thead>
    <tbody>
      @foreach($metodos as $metodo)
        <tr>
          <td>{{$metodo->nombre_metodo}}</td>
          <td>{{$metodo->descripcion_metodo}}</td>
          <td>{{$metodo->tiempo_aprox_metodo}}</td>
          <td>{{$metodo->categoria_metodo}}</td>
          <td>
              <a href="{{ route('admin.metodos.destroy',$metodo->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminarlo?')">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $metodos->render() !!}

@endsection
