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

              <div class="container">
                  <h3>Ingrediente</h3>
                  <div class="row">
                      <div class="form-group form-group-multiple-selects col-xs-11 col-sm-8 col-md-4">
                      <div class="input-group input-group-multiple-select col-xs-12">
                          <select class="form-control" type="text" name="lista_ingredientes[]" style="width: 100%;">
                            @foreach($ingredientes as $ingrediente)
                              <option>{{$ingrediente->nombre_ingrediente}}</option>
                            @endforeach
                          </select>
                        <span class="input-group-addon input-group-addon-remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </span>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="container">
                <h3>Cantidad</h3>
                  <div class="row">
                      <div class="form-group form-group-options col-xs-11 col-sm-8 col-md-4">
                      <div class="input-group input-group-option col-xs-12">
                        <input type="number" min="1" max="100" name="cantidades[]" class="form-control" placeholder="Cantidad">
                        <span class="input-group-addon input-group-addon-remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
                  
            <div class="box-footerProductos">
              <button type="submit" class="btn btn-primary">Agregar</button>
            </div>

          </form>

        </div>
              
      </div>
    </div>
  </div>

  <hr>
@endsection
