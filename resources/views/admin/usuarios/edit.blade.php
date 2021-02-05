@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Usuario</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
	<li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Datos Personales</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body" style="display: block;">
				<form method="POST" action="{{route('admin.usuarios.update', $usuario)}}">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nombre: </label>
						<input type="text" name="name" value="{{old('name',$usuario->name)}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Correo Electronico: </label>
						<input type="email" name="email" value="{{old('email',$usuario->email)}}" class="form-control">
					</div>
					<button class="btn btn-info btn-block">Actualizar Usuario</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">Roles</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body" style="display: block;">
						<form method="POST" action="{{route('admin.usuarios.roles.update',$usuario)}}">
							@csrf
							@method('PUT')
							@include('admin.usuarios.checkboxes.roles')
							<button class="btn btn-info btn-block">Actualizar Roles</button>
						</form>
					</div>
				</div>
			</div> {{-- Para Roles --}}
			<div class="col-md-12">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">Permisos</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body" style="display: block;">
						<form method="POST" action="{{route('admin.usuarios.permisos.update',$usuario)}}">
							@csrf
							@method('PUT')


							@include('admin.usuarios.checkboxes.permisos',['model'=>$usuario])
							<button class="btn btn-info btn-block">Actualizar Permisos</button>

						</div> {{-- Card-body --}}
					</form>
				</div>
			</div> {{-- Para Permisos --}}
		</div>
	</div>
</div>
@stop