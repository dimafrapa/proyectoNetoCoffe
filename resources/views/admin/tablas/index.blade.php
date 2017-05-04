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

          <?php

            $costoIngrediente = 0;
            $perdida_ganancia = 0;
            $costoPreparacion = 0;
            $newstring = $producto->ingredientes_del_producto;
              foreach ($ingredientes as $ingrediente) {

                $posDelId = strpos($newstring, ';', 0);
                $ingrediente_id = substr($newstring, 0, $posDelId);
                
                $posDeLaCantidad = strpos($newstring, ';', 0);
                $cantidad = substr($newstring, 0, $posDeLaCantidad);
                
                if($ingrediente->id == $ingrediente_id){
                  $newstring = str_replace($ingrediente_id . ';', '', $newstring);
                  $newstring = str_replace($cantidad . ';', '', $newstring);

                  $costoIngrediente = $costoIngrediente + (($ingrediente->costo_supermercado_ingrediente*$cantidad)/$ingrediente->cantidad_ingrediente);
                }
              }

              $costoPreparacion = 400 + 100;
              $perdida_ganancia = $producto->precio_de_venta - ($costoIngrediente + $costoPreparacion);
          ?> 
          <tr>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->precio_de_venta}}</td>
            <td>{{$costoIngrediente}}</td>
            @if($perdida_ganancia < 0)
              <td><a class="btn btn-danger loading disabled">{{$perdida_ganancia}}</a></td>
            @elseif ($perdida_ganancia >= 0)
              <td><a class="btn btn-success loading disabled">{{$perdida_ganancia}}</a></td>
            @elseif($perdida_ganancia = 0)
              <td><a class="btn btn-default loading disabled">{{$perdida_ganancia}}</a></td>
            @endif
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection