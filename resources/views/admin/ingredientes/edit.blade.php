@extends('layouts.app')

@section('htmlheader_title')
  Crear Barista
@endsection


@section('main-content')

  {!! Form::open(['route'=>['solidario.dictamenes.update',$dictamen],'method'=>'POST','class'=>'form-horizontal']) !!}
  <div class="box-body">
    <div class="form-group">
      <label for="nombreAuditor">Nombre Auditor</label>
      <input type="text" class="form-control" name="nombreAuditor" value="{{$dictamen->nombreAuditor}}" required>
    </div>

    <div class="form-group">
      <label for="numTarjetaProfesional">Numero tarjeta profesional</label>
      <input type="number" class="form-control" name="numTarjetaProfesional" value="{{$dictamen->numTarjetaProfesional}}" required>
    </div>
    <div class="form-group">
      <label for="cantLLamadosAtencion">Cantidad llamados atencion</label>
      <input type="number" class="form-control" name="cantLLamadosAtencion" value="{{$dictamen->cantLLamadosAtencion}}" required>
    </div>
  </div><!-- /.box-body -->
  <div class="box-footer">
    <button type="submit" name="editar" class="btn btn-primary">Registrar Cambios</button>
  </div>
  {!! Form::close() !!}

@endsection
