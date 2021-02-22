@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Proveedores</h1>
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
          <h3 class="card-title">Tabla de Proveedores</h3>
          <a href="{{route('rh.proveedores.create')}}" class="btn btn-secondary float-right">
          <i class="fa fa-plus"></i> Añadir Proveedor
          </a>
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
                <th>Número de proveedor</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Nombre de la persona a contactar</th>
                <th>Saldo</th>
                <th>Categoría del proveedor</th>
                <th>Ver y añadir...</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($proveedores as $proveedor)
              <tr>
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->no_proveedor}}</td>
                <td>{{$proveedor->nombre}}</td>
                <td>{{$proveedor->descripcion}}</td>
                <td>{{$proveedor->persona_contacto}}</td>
                <td>${{$proveedor->saldo}}</td>
                <td>{{$proveedor->categoriaProveedor->nombre}}</td>
                <td>
                  <center>
                    <div class="btn-group">
                        <a href="{{route('rh.domicilios_proveedores.show',Crypt::encryptString($proveedor->id))}}" class="btn btn-primary btn-sm"><i class="fa fa-address-card"
                        role="button" ></i> Domicilios</a>
                    </div>
                  </center>
                </td>
                <td>
                  <center>
                    <div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat">Opciones</button>
                      <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="{{route('rh.proveedores.edit',Crypt::encryptString($proveedor->id))}}"><i class="fas fa-user-edit"></i> Editar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-target="#modal-destroy-{{$proveedor->id}}" data-toggle="modal"><i class="fas fa-user-times"></i> Eliminar</a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </div>
                  </center>
                </td>
              </tr>
              @include('recursos_humanos.proveedores.destroy')
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
