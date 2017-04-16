@extends('layouts.app')

@section('htmlheader_title')
  Ingredientes
@endsection


@section('main-content')
  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Unidad de Medida</th>
        <th>Cantidad</th>
        <th>Costo</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ingredientes as $ingrediente)
        <tr>
          <td>{{$ingrediente->nombre_ingrediente}}</td>
          <td>{{$ingrediente->unidad_medida}}</td>
          <td>{{$ingrediente->cantidad_ingrediente}}</td>
          <td>{{$ingrediente->costo_supermercado_ingrediente}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $ingredientes->render() !!}

@endsection
