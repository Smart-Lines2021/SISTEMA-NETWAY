@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Vehículos</h1>
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
          <h3 class="card-title">Tabla de Vehículos Registrados</h3>
          <a href="{{route('rh.vehiculos.create')}}" class="btn btn-secondary float-right">
          <i class="fa fa-plus"></i> Añadir Vehiculo
          </a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="table_id" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Color</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($vehiculos as $vehiculo)
              <tr>
                <td>{{$vehiculo->id}}</td>
                <td>{{$vehiculo->nombre}}</td>
                <td>{{$vehiculo->modelo}}</td>
                <td>{{$vehiculo->placa}}</td>
                <td>{{$vehiculo->color}}</td>
                <td>
                  <center>
                  <div class="btn-group">
                    <button type="button" class="btn btn-info btn-flat">Opciones</button>
                    <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="{{route('admin.vehiculos.edit',Crypt::encryptString($vehiculo->id))}}"><i class="fas fa-user-edit"></i> Editar</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" data-target="#modal-destroy-{{$vehiculo->id}}" data-toggle="modal"><i class="fas fa-user-times"></i> Eliminar</a>
                      <div class="dropdown-divider"></div>
                    </div>
                  </div>
                  </center>
                </td>
              </tr>
              @include('admin.vehiculos.destroy')
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
