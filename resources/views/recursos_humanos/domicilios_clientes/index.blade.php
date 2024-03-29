@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Domicilios de {{$cliente->nombre_empresa}}</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
  <li class="breadcrumb-item active">Recursos Humanos</li>
</ol>
@stop
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabla de Domicilios del cliente {{$cliente->nombre_empresa}}</h3>
          <a class="btn btn-secondary float-right" href="{{route('ver.domicilios_clientes',Crypt::encryptString($cliente->id))}}"><i class="fa fa-plus"></i> Añadir Domicilio</a>
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
                <th>Estado</th>
                <th>Municipio</th>
                <th>Código Postal</th>
                <th>Colonia</th>
                <th>Calle</th>
                <th>Número Exterior</th>
                <th>Número Interior</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($domiciliosClientes as $domicilio)
              <tr>
                <td>{{$domicilio->id}}</td>
                <td>{{$domicilio->estado}}</td>
                <td>{{$domicilio->municipio}}</td>
                <td>{{$domicilio->codigo_postal}}</td>
                <td>{{$domicilio->colonia}}</td>
                <td>{{$domicilio->calle}}</td>
                <td>{{$domicilio->numero_exterior}}</td>
                <td>{{$domicilio->numero_interior}}</td>
                <td>
                  <center>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat">Opciones</button>
                      <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{route('rh.domicilios_clientes.edit',Crypt::encryptString($domicilio->id))}}"><i class="fas fa-user-edit"></i> Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-target="#modal-destroy-{{$domicilio->id}}" data-toggle="modal"><i class="fas fa-user-times"></i> Eliminar</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </div>
                  </center>
                </td>
              </tr>
              @include('recursos_humanos.domicilios_clientes.destroy')
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