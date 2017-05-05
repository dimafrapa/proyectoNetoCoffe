@extends('layouts.app')

@section('htmlheader_title')
  Crear Barista
@endsection


@section('main-content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un Nuevo Barista
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo barista-->
          <form class="row" role="form" action="{{route('admin.baristas.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombre_completo_empleado">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre_completo_empleado" value="{{$barista->nombre_completo_empleado}}" required>
              </div>

              <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="number" class="form-control" name="cedula" value="{{$barista->cedula}}" required>
              </div>
              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" name="telefono" value="{{$barista->telefono}}" required>
              </div>
              <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" name="direccion" value="{{$barista->direccion}}" required>
              </div>

              <h2> Datos Profesionales del Barista</h2>
              <div class="form-group">
                <label for="anos_experiencia">Años de Experiencia</label>
                <input type="number" min="1" max="100" class="form-control" name="anos_experiencia" value="{{$barista->anos_experiencia}}" required>
              </div>
              <div class="form-group">
                <label for="num_cursos">Número de Cursos</label>
                <input type="number" min="1" max="100" class="form-control" name="num_cursos" value="{{$barista->num_cursos}}" required>
              </div>
              <div class="form-group">
                <label for="num_estudios_profesionales">Número Estudios Profesionales</label>
                <input type="number" min="1" max="20" class="form-control" name="num_estudios_profesionales" value="{{$barista->num_estudios_profesionales}}" required>
              </div>
              <div class="form-group">
                <label for="num_certificaciones">Número de Certificaciones</label>
                <input type="number" min="1" max="50" class="form-control" name="num_certificaciones" value="{{$barista->num_certificaciones}}" required>
              </div>
              <div class="form-group">
                <label for="num_asistencia_competencias">Número de Asistencia a Competencias</label>
                <input type="number" min="1" max="50" class="form-control" name="num_asistencia_competencias" value="{{$barista->num_asistencia_competencias}}" required>
              </div>
              <div class="form-group">
                <label for="rango_barista">Rango Barista</label>
                <li><a href="{{url('admin/baristas/calcularRango')}}">Calcular</a></li>
                <input type="number" min="1" max="10" class="form-control" name="rango_barista" value="{{$barista->rango_barista}}" placeholder="Solo un número del 1-10 por favor." required>
              </div>

              <!-- AQUI SE AGREGA EL RATING CARD PARA EVALUAR EL RANGO DEL BARISTA-->
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12 col-md-6">
                          <div class="well well-sm">
                              <div class="row">
                                  <div class="col-xs-12 col-md-6 text-center">
                                      <h1 class="rating-num">{{$rangoBarista}}</h1>
                                  </div>
                                  <div class="col-xs-12 col-md-6" width="100%" style=" width: 100%;">
                                      <div class="row rating-desc">
                                          <div class="col-xs-3 col-md-3 text-right">
                                              <span class="glyphicon glyphicon-star"></span>Experiencia
                                          </div>
                                          <div class="col-xs-8 col-md-9">
                                              <div class="progress progress-striped">
                                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                      aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentajeExperiencia}}">
                                                      <span class="sr-only">{{$porcentajeExperiencia}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- end 5 -->
                                          <div class="col-xs-3 col-md-3 text-right">
                                              <span class="glyphicon glyphicon-star"></span>Cursos
                                          </div>
                                          <div class="col-xs-8 col-md-9">
                                              <div class="progress">
                                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                                                      aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentajeCursos}}">
                                                      <span class="sr-only">{{$porcentajeCursos}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- end 4 -->
                                          <div class="col-xs-3 col-md-3 text-right">
                                              <span class="glyphicon glyphicon-star"></span>Estudios
                                          </div>
                                          <div class="col-xs-8 col-md-9">
                                              <div class="progress">
                                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                                      aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentajeEstudiosProfesionales}}">
                                                      <span class="sr-only">{{$porcentajeEstudiosProfesionales}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- end 3 -->
                                          <div class="col-xs-3 col-md-3 text-right">
                                              <span class="glyphicon glyphicon-star"></span>Certificaciones
                                          </div>
                                          <div class="col-xs-8 col-md-9">
                                              <div class="progress">
                                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
                                                      aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentajeCertificaciones}}">
                                                      <span class="sr-only">{{$porcentajeCertificaciones}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- end 2 -->
                                          <div class="col-xs-3 col-md-3 text-right">
                                              <span class="glyphicon glyphicon-star"></span>Competencias
                                          </div>
                                          <div class="col-xs-8 col-md-9">
                                              <div class="progress">
                                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                                      aria-valuemin="0" aria-valuemax="100" style="width: {{$porcentajeCompetencias}}">
                                                      <span class="sr-only">{{$porcentajeCompetencias}}</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- end 1 -->
                                      </div>
                                      <!-- end row -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!--/////////////////////////////////////// FIN RANGO DEL BARISTA /////////////////////////////////////// -->
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
