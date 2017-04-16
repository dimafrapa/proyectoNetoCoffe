@extends('layouts.app')

@section('htmlheader_title')
  Crear Producto
@endsection


@section('main-content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un Nuevo Producto
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo barista-->
          <form class="row" role="form" action="{{route('admin.productos.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombre_producto">Nombre</label>
                <input type="text" class="form-control" name="nombre_producto" value="{{$producto->nombre_producto}}" required>
              </div>

              <div class="form-group">
                <label for="precio_de_venta">Precio de Venta</label>
                <input type="number" class="form-control" name="precio_de_venta" value="{{$producto->precio_de_venta}}" required>
              </div>

              <div class="rowIngredientes col-list">

                  <div class="col-md-5 t1">
                      <div class="col-head text-center">
                          <span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
                          <h2>Ingredientes</h2>
                      </div>

                      <ul class="list-unstyle">

                          @foreach($ingredientes as $ingrediente)
                              <?php
                                  if($ingrediente->cantidad_ingrediente > 0){
                                      for ($i = 0;$i< $ingrediente->cantidad_ingrediente; $i++){
                                          $cantidades[$i] = $i+1;
                                      }
                                  }else{
                                      $cantidades[0] = 0;
                                  }
                              ?> 
                              <label><input type="checkbox" name="ingredientes[]" value="{{$ingrediente->id_ingrediente}}" onclick="sel<?php echo $ingrediente->id_ingrediente;?>.disabled=!this.checked" >
                                  <label>{{$ingrediente->nombre_ingrediente}}</label>

                                  <select  id="sel<?php echo $ingrediente->id;?>" type="number" name="cantidad_ingrediente[]" disabled="disabled">
                                      <option value="0">0</option>
                                      @foreach($cantidades as $num)
                                          <option value="{{$num}}">{{$num}}</option>
                                      @endforeach 
                                  </select>
                              </label>
                              <br />
                              <?php
                                  unset($cantidades);
                                  $cantidades = array(); 
                              ?>
                          @endforeach
                      </ul>
                  </div>
                  
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>

          </form>

        </div>
              
      </div>
    </div>
  </div>

  <hr>

  <script>
        $(function(){
        $('.normal').autosize();
        $('.animated').autosize({append: "\n"});
      });
    </script>

@endsection
