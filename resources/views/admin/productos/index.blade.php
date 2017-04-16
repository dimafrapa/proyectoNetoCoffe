@extends('layouts.app')

@section('htmlheader_title')
  Productos
@endsection


@section('main-content')
  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Precio de Venta</th>
        <th>Ingredientes</th>
        <th>Ganancia-Perdida</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
        <tr>
          <td>{{$producto->nombre_producto}}</td>
          <td>{{$producto->precio_de_venta}}</td>
          <td>{{$producto->ingredientes_del_producto}}</td>
          <td></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $productos->render() !!}

@endsection
