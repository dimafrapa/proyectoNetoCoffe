@extends('template/main')

@section('title')
  Lista de Dictamenes
@endsection

@section('content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un Dictamen
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo usuario-->
          <form class="row" action="{{route('solidario.dictamenes.store')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombreEmpresa">Organización</label>

                <select class="form-control" type="text" name="nombreEmpresa" style="width: 100%;">
                  <optgroup label="Fondos de Empleados">
                    @foreach($organizaciones as $organizacion)
                      @if($organizacion->razonSocial == 'Fondo de Empleados')
                        <option>{{$organizacion->nombre}}</option>
                      @endif
                    @endforeach
                  </optgroup>

                  <optgroup label="Cooperativas">
                    @foreach($organizaciones as $organizacion)
                      @if($organizacion->razonSocial == 'Cooperativa')
                        <option>{{$organizacion->nombre}}</option>
                      @endif
                    @endforeach
                  </optgroup>

                  <optgroup label="Mutuales">
                    @foreach($organizaciones as $organizacion)
                      @if($organizacion->razonSocial == 'Mutual')
                        <option>{{$organizacion->nombre}}</option>
                      @endif
                    @endforeach
                  </optgroup>
                </select>
              </div>

              <div class="form-group">
                <label for="nombreAuditor">Nombre Auditor</label>
                <input type="text" class="form-control" name="nombreAuditor" placeholder="Ingrese el nombre del auditor correspondiente" required>
              </div>
              <div class="form-group">
                <label for="numTarjetaProfesional">Numero de tarjeta profesional</label>
                <input type="number" class="form-control" name="numTarjetaProfesional" placeholder="Ingrese el numero de la tarjeta profesional del auditor" required>
              </div>
              <div class="form-group">
                <label for="cantLLamadosAtencion">Cantidad de Llamados de atención</label>
                <input type="number" class="form-control" name="cantLLamadosAtencion" placeholder="Ingrese la cantidad de quejas en el dictamen" required>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Agregar</button>
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
        <th>Id</th>
        <th>IdEmpresa</th>
        <th>nombreAuditor</th>
        <th>numTarjetaProfesional</th>
        <th>cantLLamadosAtencion</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dictamenes as $dictamen)
        <tr>
          <td>{{$dictamen->id}}</td>
          <td>{{$dictamen->idEmpresa}}</td>
          <td>{{$dictamen->nombreAuditor}}</td>
          <td>{{$dictamen->numTarjetaProfesional}}</td>
          <td>{{$dictamen->cantLLamadosAtencion}}</td>
          <td><a href=" {{ route('solidario.dictamenes.edit',$dictamen->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('solidario.dictamenes.destroy',$dictamen->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $dictamenes->render() !!}

@endsection
