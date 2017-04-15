@extends('layouts/partials/sidebar')

@section('title')
  Editar datos de organizaciones {{$organizacion->nombre}}
@endsection

@section('content')

  {!! Form::open(['route'=>['solidario.orgs.update',$organizacion],'method'=>'POST','class'=>'form-horizontal']) !!}
  <div class="box-body">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" value="{{$organizacion->nombre}}" required>
    </div>

    <div class="form-group">
      <label for="telefono">Telefono:</label>
        <input class="form-control" type="number" name="telefono" value="{{$organizacion->telefono}}" required>
    </div>

    <div class="form-group">
      <label for="direccion">Direccion:</label>
        <input class="form-control" type="text" name="direccion" value="{{$organizacion->direccion}}">
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
        <button class="btn btn-primary" type="submit" name="editar">Registrar cambios</button>
    </div>
  {!! Form::close() !!}

@endsection
