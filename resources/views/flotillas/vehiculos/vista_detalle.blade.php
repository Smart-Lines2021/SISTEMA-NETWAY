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
        <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <center>
                            @if($vehiculo->foto_vehiculo !== 'avatar_vehiculo.png')

                            <img class="profile-user-img img-fluid img-circle"
                                src="{{Storage::url($vehiculo->foto_vehiculo)}}" alt="User profile picture">
                            @else
                            <img class="profile-user-img img-fluid img-circle"
                                src="{{ asset('images/avatar_vehiculo.png') }}" alt="User profile picture">
                            @endif
                        </center>
                    </div>

                    <h3 class="profile-username text-center">{{$vehiculo->tipoVehiculo->nombre}} {{$vehiculo->placa}}
                    </h3>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-car-alt"></i> Modelo</strong>

                        <p class="text-muted">
                            {{$vehiculo->nombre}}
                        </p>

                        <hr>

                        <strong><i class="fas fa-calendar-check"></i> Año de Modelo</strong>

                        <p class="text-muted">
                            {{$vehiculo->anio_modelo}}
                        </p>

                        <hr>

                        <strong><i class="fas fa-road"></i> Kilometraje</strong>

                        <p class="text-muted"> {{$vehiculo->kilometraje}}</p>

                        <hr>
                        <strong><i class="fas fa-ticket-alt"></i> Placa</strong>

                        <p class="text-muted"> {{$vehiculo->placa}}</p>

                        <hr>
                        <strong><i class="fas fa-registered"></i> Marca</strong>

                        <p class="text-muted"> {{$vehiculo->marca->nombre}}</p>

                        <hr>

                        <strong><i class="fas fa-tint"></i> Color</strong>

                        <p class="text-muted"> {{$vehiculo->colorVehiculo->nombre}}</p>

                        <hr>

                        <strong><i class="fas fa-sort-numeric-up-alt"></i> Número de serie</strong>

                        <p class="text-muted"> {{$vehiculo->no_serie}}</p>

                        <hr>


                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#polizas" data-toggle="tab">Pólizas de
                                seguro</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#mantenimientos" data-toggle="tab">Mantenimientos
                                Programados</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Historial de
                                Mantenimientos</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">

                    <div class="tab-content">

                        <div class="active tab-pane" id="polizas">

                           <a data-target="#modal-create-1-{{$vehiculo->id}}" data-toggle="modal"
                                class="btn btn-secondary float-rigth">
                                <i class="fa fa-plus"></i> Añadir Poliza
                            </a>

                            <table id="table_id" class="table table-bordered table-striped">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Aseguradora</th>
                                        <th>Póliza de Seguro</th>
                                        <th>Inicio de Póliza</th>
                                        <th>Vigencia</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculo->polizasVehiculos as $poliza)

                                    <tr>
                                        <td>{{$poliza->id}}</td>
                                        <td>{{$poliza->aseguradora->nombre}}</td>
                                        <td>{{$poliza->poliza}}</td>
                                        <td>{{$poliza->inicio_poliza}}</td>
                                        <td>{{$poliza->vigencia_poliza}}</td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info btn-flat">Opciones</button>
                                                    <button type="button"
                                                        class="btn btn-info btn-flat dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item"
                                                            data-target="#modal-edit-{{$poliza->id}}"
                                                            data-toggle="modal"><i class="fas fa-user-times"></i>
                                                            Editar</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"
                                                            data-target="#modal-destroy-{{$poliza->id}}"
                                                            data-toggle="modal"><i class="fas fa-user-times"></i>
                                                            Eliminar</a>
                                                        <div class="dropdown-divider"></div>

                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    @include('flotillas.polizas.destroy')
                                    @include('flotillas.polizas.edit')
                                    @endforeach
                                    @include('flotillas.polizas.create')
                                </tbody>
                            </table>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="mantenimientos">
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <a data-target="#modal-create-2-{{$vehiculo->id}}" data-toggle="modal"
                                class="btn btn-secondary float-rigth">
                                <i class="fa fa-plus"></i> Añadir Servicio
                            </a>
                            <br>
                            <br>
                            <table id="table_id" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kilometraje</th>
                                        <th>Tipo de Servicio</th>
                                        <th>Taller</th>
                                        <th>Observaciones</th>
                                        <th>Fecha Programada</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculo->serviciosVehiculos as $servicio)
                                    <tr>
                                        <td>{{$servicio->id}}</td>
                                        <td>{{$servicio->kilometraje}}</td>
                                        <td>{{$servicio->tipoServicio}}</td>
                                        <td>{{$servicio->taller->nombre}}</td>
                                        <td>{{$servicio->observaciones}}</td>
                                        <td>{{$servicio->fecha}}</td>
                                        <td>{{$servicio->estado}}</td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info btn-flat">Opciones</button>
                                                    <button type="button"
                                                        class="btn btn-info btn-flat dropdown-toggle dropdown-icon"
                                                        data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item"
                                                            href="{{route('create.poliza.vista.detalle',Crypt::encryptString($poliza->id))}}"><i
                                                                class="fas fa-user-edit"></i> Editar</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item"
                                                            data-target="#modal-destroy-{{$poliza->id}}"
                                                            data-toggle="modal"><i class="fas fa-user-times"></i>
                                                            Eliminar</a>
                                                        <div class="dropdown-divider"></div>

                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    @include('flotillas.polizas.destroy')
                                    @endforeach
                                    @include('flotillas.mantenimientos.create')
                                </tbody>
                            </table>

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
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