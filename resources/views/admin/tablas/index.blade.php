@extends('layouts.app')

@section('htmlheader_title')
  Datos Importantes
@endsection


@section('main-content')
  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio de Venta</th>
        <th>Precio Preparación</th>
        <th>Ganancia-Perdida</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
        <tr>
          <td>{{$producto->nombre_producto}}</td>
          <td>{{$producto->precio_de_venta}}</td>
          <td>0</td>
          <td>0</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $productos->render() !!}

@endsection
