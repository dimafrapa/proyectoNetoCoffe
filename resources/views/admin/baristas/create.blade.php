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
          <form class="row" action="{{route('netocafe.baristas.store')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="box-body">

              <div class="form-group">
                <label for="nombre_completo_empleado">Nombre Completo</label>
                <input type="text" class="form-control" name="nombre_completo_empleado" value="{{$barista->nombre_completo_empleado}}" required>
              </div>

              <div class="form-group">
                <label for="telefono">Cédula</label>
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
                <input type="number" class="form-control" name="anos_experiencia" value="{{$barista->anos_experiencia}}" required>
              </div>
              <div class="form-group">
                <label for="num_cursos">Número de Cursos</label>
                <input type="number" class="form-control" name="num_cursos" value="{{$barista->num_cursos}}" required>
              </div>
              <div class="form-group">
                <label for="num_estudios_profesionales">Numero Estudios Profesionales</label>
                <input type="number" class="form-control" name="num_estudios_profesionales" value="{{$barista->num_estudios_profesionales}}" required>
              </div>
              <div class="form-group">
                <label for="num_certificaciones">Número de Certificaciones</label>
                <input type="number" class="form-control" name="num_certificaciones" value="{{$barista->num_certificaciones}}" required>
              </div>
              <div class="form-group">
                <label for="num_asistencia_competencias">Número de Asistencia a Competencias</label>
                <input type="number" class="form-control" name="num_asistencia_competencias" value="{{$barista->num_asistencia_competencias}}" required>
              </div>
              <div class="form-group">
                <label for="rango_barista">Rango Barista</label>
                <input type="number" class="form-control" name="rango_barista" value="{{$barista->rango_barista}}" required>
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
