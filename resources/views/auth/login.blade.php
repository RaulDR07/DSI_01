@section('content')
@extends('template.default')


@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h2>Inicio de Sesión</h2>
		</div>
		<div class="panel-body">
			<form action="{{route('loginCheck')}}" method="POST">
				<div class="form-group">
					<label>Nombre de Usuario</label>
					<input type="text" name="username" class="form-control" placeholder="Ingresar nombre de usuario">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" name="password" class="form-control" placeholder="Ingresar contraseña">
				</div>
				<button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-lock"></i>Iniciar</button>
				{{csrf_field()}}
			</form>
		</div>
	</div>
</div>
@endsection