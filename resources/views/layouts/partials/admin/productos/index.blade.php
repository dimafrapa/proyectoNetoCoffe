@extends('template/main')

@section('title')
  Lista de organizaciones
@endsection

@section('content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar una nueva organización
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de una nueva organizacion-->
          <form class="row" action="{{route('solidario.orgs.store')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre de la organizacion" required>
                </div>
                <div class="form-group">
                  <label for="telefono">Telefono:</label>              
                    <input class="form-control" type="number" name="telefono" value="" placeholder="Ingrese un telefono" required>
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección:</label>
                    <input class="form-control" type="text" name="direccion" value="" placeholder="Ingrese una dirección">
                </div>
                <div class="form-group">
                  <label for="direccion">Razón Social</label>
                      <select class="form-control" type="text" name="razonSocial">
                          <option>Fondo de Empleados</option>
                          <option>Cooperativa</option>
                          <option>Mutual</option>
                      </select>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button class="btn btn-primary">Registrar</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Razón Social</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($organizaciones as $organizacion)
        <tr>
          <td>{{$organizacion->nombre}}</td>
          <td>{{$organizacion->telefono}}</td>
          <td>{{$organizacion->direccion}}</td>
          <td>{{$organizacion->razonSocial}}</td>
          <td><a href=" {{ route('solidario.orgs.edit',$organizacion->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('solidario.orgs.destroy',$organizacion->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $organizaciones->render() !!}
@endsection
