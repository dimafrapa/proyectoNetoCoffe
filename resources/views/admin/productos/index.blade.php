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
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)
        <tr>
          <td>{{$producto->nombre_producto}}</td>
          <td>{{$producto->precio_de_venta}}</td>
          <td>{{$producto->ingredientes_del_producto}}</td>
          <td>
              <a href="{{ route('admin.productos.destroy',$producto->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminarlo?')">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $productos->render() !!}

@endsection
