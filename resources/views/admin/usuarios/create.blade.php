@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear Usuario</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
	<li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
	<li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Nuevo Usuario</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
					</button>
				</div>
			</div>
			<div class="card-body" style="display: block;">
				<form method="POST" action="{{route('admin.usuarios.store')}}">
					@csrf
					<div class="form-group">
						<label for="name">Nombre: </label>
						<input type="text" name="name" value="{{old('name')}}" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Correo Electronico: </label>
						<input type="email" name="email" value="{{old('email')}}" class="form-control">
					</div>
					<div class="form-group col-md-12">
						@include('admin.usuarios.checkboxes.roles')
					</div>
					<div class="form-group col-md-12">
						@include('admin.usuarios.checkboxes.permisos',['model'=>$usuario])
					</div>
					<button class="btn btn-info btn-block">Crear Usuario</button>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection