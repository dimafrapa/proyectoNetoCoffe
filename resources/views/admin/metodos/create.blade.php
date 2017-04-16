@extends('layouts.app')

@section('htmlheader_title')
  Crear Método
@endsection


@section('main-content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un Nuevo Método
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo barista-->
          <form class="row" role="form" action="{{route('admin.metodos.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombre_metodo">Nombre</label>
                <input type="text" class="form-control" name="nombre_metodo" value="{{$metodo->nombre_metodo}}" required>
              </div>

              <div class="form-group">
                <label for="descripcion_metodo">Descripción</label>
                <textarea name="descripcion_metodo" value="{{$metodo->descripcion_metodo}}" class="form-control animated" placeholder="Ingrese una descripción" required></textarea>
              </div>

              <div class="form-group">
                <label for="tiempo_aprox_metodo">Tiempo Duración</label>
                <input type="number" class="form-control" name="tiempo_aprox_metodo" value="{{$metodo->tiempo_aprox_metodo}}" required>
              </div>
              <div class="form-group">
                <label for="categoria_metodo">Categoría</label>
                <input type="number" min="1" max="10" class="form-control" name="categoria_metodo" value="{{$metodo->categoria_metodo}}" placeholder="Solo un número del 1-10 por favor." required>
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
