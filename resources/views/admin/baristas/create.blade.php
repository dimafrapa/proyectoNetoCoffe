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
          @include('flash::message')
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo barista-->
          <form class="row" role="form" action="{{route('admin.baristas.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">
              <h5>Si desea ingresar el rango del barista, primero dirijase a la sección
                <b>Datos Profesionales del Barista</b>, llene todos los campos y luego de clic en el boton
                <b>Calcular Rango</b>. De lo contrario llene los datos personales del barista y de clic en el boton
                <b>Agregar Barista</b> el cual sera ingresado con un rango = 0.</h5>
                <hr>
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
              <div class="row">
                <div class="col-md-3">Años de Experiencia
                  <input name="anos_experiencia" readonly="readonly" value="{{$barista->anos_experiencia}}">
                </div>
                <div class="col-md-3">Número De Cursos
                  <input name="num_cursos" readonly="readonly" value="{{$barista->num_cursos}}">
                </div>
                <div class="col-md-3">Estudios Profesionales
                  <input name="num_estudios_profesionales" readonly="readonly" value="{{$barista->num_estudios_profesionales}}">
                </div>
                <div class="col-md-3">Número de Certificaciones
                  <input name="num_certificaciones" readonly="readonly" value="{{$barista->num_certificaciones}}">
                </div>
                <div class="col-md-3">Asistencia a Competencias
                  <input name="num_asistencia_competencias" readonly="readonly" value="{{$barista->num_asistencia_competencias}}">
                </div>
              </div>
              <div class="box-footer">
                <label for="direccion">Rango del Barista generado</label>
                  <input type="number" min="1" max="10" class="form-control" name="rango_barista" readonly="readonly" value="{{$rangoBarista}}" placeholder="Solo un número del 1-10 por favor." >
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Agregar Barista</button>
              </div>
            </div>
          </form>

          <!--Aqui va el formulario para calcular el rango de un barista-->
          <form class="row" role="form" action="{{route('admin.baristas.calcularRango')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <h2 color="#337ab7" style="color: #337ab7;"> Datos Profesionales del Barista</h2>
              <div class="form-group">
                <label for="anos_experiencia">Años de Experiencia</label>
                <input placeholder="Solo un número del 1-10 por favor." type="number" min="1" max="10" class="form-control" name="anos_experiencia" value="{{$barista->anos_experiencia}}" required>
              </div>
              <div class="form-group">
                <label for="num_cursos">Número de Cursos</label>
                <input placeholder="Solo un número del 1-20 por favor." type="number" min="1" max="20" class="form-control" name="num_cursos" value="{{$barista->num_cursos}}" required>
              </div>
              <div class="form-group">
                <label for="num_estudios_profesionales">Número Estudios Profesionales</label>
                <input placeholder="Solo un número del 1-4 por favor." type="number" min="1" max="4" class="form-control" name="num_estudios_profesionales" value="{{$barista->num_estudios_profesionales}}" required>
              </div>
              <div class="form-group">
                <label for="num_certificaciones">Número de Certificaciones</label>
                <input placeholder="Solo un número del 1-10 por favor." type="number" min="1" max="10" class="form-control" name="num_certificaciones" value="{{$barista->num_certificaciones}}" required>
              </div>
              <div class="form-group">
                <label for="num_asistencia_competencias">Número de Asistencia a Competencias</label>
                <input placeholder="Solo un número del 1-20 por favor." type="number" min="1" max="20" class="form-control" name="num_asistencia_competencias" value="{{$barista->num_asistencia_competencias}}" required>
              </div>

              <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Calcular Rango</button>
              </div>
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
                                                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentajeExperiencia; ?>%">
                                                      <span class="sr-only">{{$porcentajeExperiencia}}%</span>
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
                                                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentajeCursos; ?>%">
                                                      <span class="sr-only">{{$porcentajeCursos}}%</span>
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
                                                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentajeEstudiosProfesionales; ?>%">
                                                      <span class="sr-only">{{$porcentajeEstudiosProfesionales}}%</span>
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
                                                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentajeCertificaciones; ?>%">
                                                      <span class="sr-only">{{$porcentajeCertificaciones}}%</span>
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
                                                      aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentajeCompetencias; ?>%">
                                                      <span class="sr-only">{{$porcentajeCompetencias}}%</span>
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
          </form>
        </div>

      </div>
    </div>
  </div>

  <hr>
@endsection
