@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear contacto para {{$cliente->nombre_empresa}}</h1>
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
        <h3 class="card-title">Nuevo contacto para el cliente {{$cliente->nombre_empresa}}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.contactos_clientes.store')}}">
          @csrf

          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la persona a contactar" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
            minlegth="4" maxlength="40"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
            value="{{old('nombre')}}">
          </div>
          <div class="form-group">
            <label for="apellido">Apellidos:</label>
            <input type="text" name="apellido" class="form-control" placeholder="Ingrese los apellidos de la persona a contactar" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
            minlegth="4" maxlength="40"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
            value="{{old('apellido')}}">
          </div>
          <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" class="form-control" placeholder="Ingrese el correo de la persona a contactar" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s/.-_@0-9]{4,80}"
            minlegth="4" maxlength="80"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 80"
            value="{{old('correo')}}">
          </div>
          <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese el telefono de la persona a contactar" required pattern="[0-9]{4,12}"
            minlegth="4" maxlength="12"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 12"
            value="{{old('telefono')}}">
          </div>
          <div class="form-group">
            <label for="cumpleaños">Fecha de nacimiento:</label>
            <input value="{{old('cumpleaños')}}" type="date" name="cumpleaños" class="form-control" required title="Seleccione la fecha de nacimiento de la persona a contactar">
          </div>
          <input type="hidden" id="cliente_id" name="cliente_id" value="{{$cliente->id}}" class="form-control">

          <button class="btn btn-info btn-block">Crear Contacto</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection 