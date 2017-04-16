@extends('layouts.app')

@section('htmlheader_title')
  Crear Ingrediente
@endsection


@section('main-content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un Nuevo Ingrediente
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo ingrediente-->
          <form class="row" role="form" action="{{route('admin.ingredientes.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombre_ingrediente">Nombre</label>
                <input type="text" class="form-control" name="nombre_ingrediente" value="{{$ingrediente->nombre_ingrediente}}" required>
              </div>

              <div class="form-group">
                <label for="unidad_medida">Unidad de Medida</label>
                <input type="text" class="form-control" name="unidad_medida" value="{{$ingrediente->unidad_medida}}" required>
              </div>
              <div class="form-group">
                <label for="cantidad_ingrediente">Cantidad</label>
                <input type="number" class="form-control" name="cantidad_ingrediente" value="{{$ingrediente->cantidad_ingrediente}}" required>
              </div>
              <div class="form-group">
                <label for="costo_supermercado_ingrediente">Costo en el Supermercado</label>
                <input type="number" class="form-control" name="costo_supermercado_ingrediente" value="{{$ingrediente->costo_supermercado_ingrediente}}" required>
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
@endsection
