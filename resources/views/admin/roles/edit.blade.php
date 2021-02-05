@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Rol</h1>
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
                <h3 class="card-title">Editar Rol</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('admin.roles.update',$role)}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre: </label>
                        <input type="text" disabled  value="{{old('name',$role->name)}}" class="form-control" placeholder="Ingrese el nombre del rol">
                    </div>
                     <div class="form-group">
                        <label for="display_name">Nombre a mostrar: </label>
                        <input type="text" name="display_name" value="{{old('display_name',$role->display_name)}}" class="form-control" placeholder="Ingrese el nombre a mostrar del rol">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción: </label>
                        <input type="text" name="description" value="{{old('description',$role->description)}}" class="form-control" placeholder="Ingrese una breve descripción">
                    </div>
                    <div class="form-group col-md-12">
                        @include('admin.usuarios.checkboxes.permisos',['model'=>$role])
                    </div>
                    <button class="btn btn-info btn-block">Actualizar Rol</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection