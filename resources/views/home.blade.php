@extends('layouts.app')

@section('htmlheader_title')
	Inicio
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bienvenido.</div>

					<div class="panel-body">
						{{ trans('Ha iniciado sesión correctamente, ahora puede hacer uso de la plataformade gestión!') }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
