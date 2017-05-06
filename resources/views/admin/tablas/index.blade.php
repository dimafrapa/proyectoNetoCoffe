@extends('layouts.app')

@section('htmlheader_title')
  Datos Importantes
@endsection


@section('main-content')

    <!--Aqui va el formulario de registro de un nuevo ingrediente-->
    <form class="row" role="form" action="{{route('admin.tablas.store')}}" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="box-body">

        <div class="form-group">
          <label for="costo_nivel_barista">Costo de cada nivel del barista</label>
          <input type="number" class="form-control" name="costo_nivel_barista" required>
        </div>

        <div class="form-group">
          <label for="costo_extra_metodo_tradicional">Costo extra por el metodo de preparación <b>TRADICIONAL</b></label>
          <input type="number" class="form-control" name="costo_extra_metodo_tradicional" required>
        </div>  

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Generar Ganancias-Perdidas</button>
        </div>
      </div>
    </form>

  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Producto</th>
        <th>Precio de Venta</th>
        <th>Precio Preparación (Ingredientes+Barista+Método)</th>
        <th>Ganancia-Perdida</th>
      </tr>
    </thead>
    <tbody>
      @foreach($productos as $producto)

          <?php

            $costoIngrediente = 0;
            $costoTotalIngredientes = 0;
            $perdida_ganancia = 0;
            $costoPreparacion = 0;
            $newstring = $producto->ingredientes_del_producto;

              foreach ($ingredientes as $ingrediente) {

                $posDelId = strpos($newstring, ';', 0);
                $ingrediente_id = substr($newstring, 0, $posDelId);
                
                $posDeLaCantidad = strpos($newstring, ';', ($posDelId + 1));
                $cantidad = substr($newstring, $posDelId + 1, ($posDeLaCantidad - $posDelId -1));

                if($ingrediente->id == $ingrediente_id){

                  $stringAEliminar = substr($newstring,0, $posDeLaCantidad+1);

                  $newstring = str_replace($stringAEliminar, ' ', $newstring);

                  $costoIngrediente = (($ingrediente->costo_supermercado_ingrediente*$cantidad)/$ingrediente->cantidad_ingrediente);
                  $costoTotalIngredientes = $costoTotalIngredientes + $costoIngrediente;
                }
              }

              $costoPreparacion = ($costo_nivel_barista * 4) + $costo_extra_metodo_tradicional;
              $perdida_ganancia = $producto->precio_de_venta - ($costoTotalIngredientes + $costoPreparacion);

              $costoTotalIngredientes = $costoTotalIngredientes + $costoPreparacion;
          ?> 
          <tr>
            <td>{{$producto->nombre_producto}}</td>
            <td>{{$producto->precio_de_venta}}</td>
            <td>{{$costoTotalIngredientes}}</td>
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