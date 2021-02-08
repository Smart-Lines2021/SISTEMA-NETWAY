@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Tipo de Vehiculos</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
  <li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabla de Tipo de Vehiculos</h3>
          <a class="btn btn-secondary float-right" style="color: white" data-target="#modal-create" data-toggle="modal">
            <i class="fa fa-plus" role="button"></i> Añadir Tipo de Vehiculo
          </a>
          @include('admin.tipo_vehiculos.create')
        </div>
        <br>
        <br>
        <hr>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table_id" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tipoVehiculos as $tipoVehiculo)
              <tr>
                <td>{{$tipoVehiculo->id}}</td>
                <td>{{$tipoVehiculo->nombre}}</td>
                <td>{{$tipoVehiculo->descripcion}}</td>
                <td>
                  <center>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat">Opciones</button>
                      <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" data-target="#modal-edit-{{$tipoVehiculo->id}}" data-toggle="modal"><i class="fas fa-user-edit"></i> Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-target="#modal-destroy-{{$tipoVehiculo->id}}" data-toggle="modal"><i class="fas fa-user-times"></i> Eliminar</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </div>
                  </center>
                </td>
              </tr>
              @include('admin.tipo_vehiculos.destroy')
              @include('admin.tipo_vehiculos.edit')
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@stop
@push('styles')
{{-- Incluimos los links del diseño de la tabla de un solo archivo --}}
@include('auxiliares.design-datatables')
@endpush
@push('scripts')
{{-- Incluimos los scripts de la tabla de un solo archivo --}}
@include('auxiliares.scripts-datatables')
@endpush