@extends('layouts.app')

@section('htmlheader_title')
  Análisis Importantes
@endsection


@section('main-content')

  @foreach($productos as $productoAuxiliar)
      <?php

        $costoBaristaMetodo = 0;
        $costoTotalProduccion = 0;
        $costoIngrediente = 0;
        $costoTotalIngredientes = 0;

          if($productoAuxiliar->nombre_producto = $nombre_productoAuxiliar){
              $newstring = $productoAuxiliar->ingredientes_del_producto;
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

              $costoBaristaMetodo = $costo_nivel_barista + $costo_extra_metodo_tradicional;
              $costoTotalProduccion = $costoTotalIngredientes + $costoBaristaMetodo;

              $costoAnterior = $costo_actual;
              $costo_actual = $costoTotalProduccion;
            }
      ?>
  @endforeach

          <!--Aqui va el formulario de registro de un nuevo barista-->
          <form class="row" role="form" action="{{route('admin.analiticas.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">
                  <div class="col-md-3">Costo extra Barista nivel 1 = 100</div>
                  <div class="col-md-3">Costo extra Barista nivel 2 = 400</div>
                  <div class="col-md-3">Costo extra Barista nivel 3 = 600</div>
                  <div class="col-md-3">Costo extra Barista nivel 4 = 800</div>
                  <div class="col-md-3">Costo extra Barista nivel 5 = 1000</div>
                  <div class="col-md-3">Costo extra Barista nivel 6 = 1200</div>
                  <div class="col-md-3">Costo extra Barista nivel 7 = 1400</div>
                  <div class="col-md-3">Costo extra Barista nivel 8 = 1600</div>
                  <div class="col-md-3">Costo extra Barista nivel 9 = 1800</div>
                  <div class="col-md-3">Costo extra Barista nivel 10 = 2000</div>
                  <div class="col-md-4">Costo extra Metodo Tradicional = 250</div>
                <hr>
                <hr>

                <div class="row">
                    <div class="col-md-4">Baristas
                      <select class="form-control" type="text" name="nivel_barista" style="width: 100%;">
                          <optgroup label="BARISTAS">
                              <option>Nivel 1</option>
                              <option>Nivel 2</option>
                              <option>Nivel 3</option>
                              <option>Nivel 4</option>
                              <option>Nivel 5</option>
                              <option>Nivel 6</option>
                              <option>Nivel 7</option>
                              <option>Nivel 8</option>
                              <option>Nivel 9</option>
                              <option>Nivel 10</option>
                          </optgroup>
                      </select>
                    </div>

                    <div class="col-md-4">Productos
                      <select class="form-control" type="text" name="nombre_producto" style="width: 100%;">
                          <optgroup label="PRODUCTOS">
                            @foreach($productosAuxiliares as $productoAux)
                                <option>{{$productoAux->nombre_producto}}</option>
                            @endforeach
                          </optgroup>
                      </select>
                    </div>

                    <div class="col-md-4">Metodos
                      <select class="form-control" type="text" name="nombre_metodo" style="width: 100%;">
                          <optgroup label="MÉTODOS">
                            @foreach($metodos as $metodo)
                              <option>{{$metodo->nombre_metodo}}</option>
                              @endforeach
                          </optgroup>
                      </select>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                      <label for="costo_anterior">Costo Anterior</label>
                      <input type="text" font-size="30px" background-color="#f9b447" style="background-color: #f9b447; font-size: 30px;" readonly="readonly" class="form-control" name="costo_anterior" value="{{$costo_anterior}}">
                  </div>

                  <div class="col-md-6">
                      <label for="costo_anterior">Costo Actual</label>
                      <input type="text" font-size="30px" background-color="#f39c12" style="background-color: #f39c12; font-size: 30px;" readonly="readonly" class="form-control" name="costo_anterior" value="{{$costo_actual}}">
                  </div>
                </div>

                <div class="box-footer" width="100%" style=" width: 100%;">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </div>
          </form>
  <hr>
@endsection
