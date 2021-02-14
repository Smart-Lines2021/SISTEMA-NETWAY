@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Vehículo</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Editar Vehículo</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('rh.vehiculos.update',Crypt::encryptString($vehiculo->id))}}">
                    @csrf
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-4 text-left-center">
                            <center>
                                <img class="profile-user-img img-fluid img-circle" id="foto_vehiculo"
                                    src="{{ asset('images/avatar_vehiculo.png') }}" alt="User profile picture">
                            </center>
                        </div>

                        <div class="col-md-8 text-left">
                            <div class="form-group">
                                <label for="foto_vehiculo">Foto del Vehículo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto_vehiculo" value="{{old('foto_vehiculo')}}" class="custom-file-input" id="inputFoto">
                                        <label class="custom-file-label" for="foto_vehiculo">Elegir imagen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="nombre">Nombre del vehículo: </label>
                                <input type="text" name="nombre" value="{{old('nombre',$vehiculo->nombre)}}" class="form-control" placeholder="Ingrese el nombre del vehículo" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" minlegth="2" maxlength="40" title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40">
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="anio_modelo">Año del modelo del vehiculo:</label>
                                <input type="number" name="anio_modelo" value="{{old('anio_modelo',$vehiculo->anio_modelo)}}"
                                class="form-control" placeholder="Ingrese año del vehiculo" required pattern="[0-9]"
                                minlegth="2" maxlength="4"
                                title="Solo se permiten numeros. Tamaño mínimo: 2. Tamaño máximo: 4. Ejemplo: 1998">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                             <div class="form-group">
                                <label for="kilometraje">Kilometraje:</label>
                                <input type="number" name="kilometraje" value="{{old('kilometraje',$vehiculo->kilometraje)}}"
                                class="form-control" placeholder="Ingrese el kilometraje del vehiculo (km ó mi)" required pattern="[0-9]"
                                minlegth="1" maxlength="10"
                                title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10. Ejemplo: 15000">
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="placa">Placa:</label>
                                <input type="text" name="placa" value="{{old('placa',$vehiculo->placa)}}"
                                    class="form-control" placeholder="Ingrese la placa del vehículo"required pattern="[A-Z 1-9]+"
                                    minlegth="1" maxlength="30"
                                    title="Solo se permiten numeros y letras. Tamaño mínimo: 1. Tamaño máximo: 30">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="color">Color:</label>
                                <select id="color" name="color" class="form-control select2" required title="Por favor, seleccione el color del vehículo.">
                                    <option value="{{ $vehiculo->colorVehiculo->id }}">{{$vehiculo->colorVehiculo->nombre}}</option>
                                    @foreach ($vehiculo->colorVehiculo->all() as $color)
                                    <option value="{{ $color->id }}">{{ $color->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_serie">Número de serie:</label>
                                <input type="text" name="no_serie" value="{{old('no_serie',$vehiculo->no_serie)}}"
                                    class="form-control" placeholder="Ingrese el número de serie del vehículo"required pattern="[A-Z 1-9]+"
                                    minlegth="1" maxlength="30"
                                    title="Solo se permiten numeros y letras. Tamaño mínimo: 1. Tamaño máximo: 30">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="marca_id">Marca:</label>
                                <select id="marca_id" name="marca_id" class="form-control select2" required title="Por favor, seleccione la marca del vehículo.">
                                    <option value="{{$vehiculo->marca->id}}">{{$vehiculo->marca->nombre}}</option>
                                    @foreach ($vehiculo->marca->all() as $marca)
                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="tipo_vehiculo_id">Tipo de vehículo:</label>
                                <select id="tipo_vehiculo_id" name="tipo_vehiculo_id" class="form-control select2" required title="Por favor, seleccione el tipo del vehículo.">
                                    <option value="{{$vehiculo->tipoVehiculo->id}}">{{$vehiculo->tipoVehiculo->nombre}}</option>
                                    @foreach ($vehiculo->tipoVehiculo->all() as $tipo_vehiculo)
                                    <option value="{{ $tipo_vehiculo->id }}">{{ $tipo_vehiculo->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info btn-block">Actualizar Vehículo</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@push('styles')
{{-- Incluimos css de select2 --}}
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@include('auxiliares.design-datetime')
@endpush
@push('scripts')
{{-- Incluimos js de select2 --}}
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
@include('auxiliares.scripts-design-datetime')

<script src="{{asset('js/api_sepomex.js')}}"></script>
<script>
    $(function () {
    //Initialize Select2 Elements
        $('.select2').select2()
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    })


    $('#inputFoto').on('change', function(ev) {
    var f = ev.target.files[0];
    var fr = new FileReader();
    
    fr.onload = function(ev2) {
        console.dir(ev2);
        $('#foto_vehiculo').attr('src', ev2.target.result);
    };
    
    fr.readAsDataURL(f);
    });

    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>

@endpush

