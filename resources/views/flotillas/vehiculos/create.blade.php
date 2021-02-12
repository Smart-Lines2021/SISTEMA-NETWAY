@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear Proveedor</h1>
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
                <h3 class="card-title">Nuevo Vehiculo</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('rh.vehiculos.store')}}">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 text-left-center">
                            <center>
                                <img class="profile-user-img img-fluid img-circle" id="foto"
                                    src="{{asset('assets/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                            </center>
                        </div>

                        <div class="col-md-8 text-left">
                            <div class="form-group">
                                <label for="exampleInputFile">Foto de Vehiculo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputFoto">
                                        <label class="custom-file-label" for="Foto de empleado">Elegir imagen</label>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_proveedor">Modelo de vehiculo:</label>
                                <input type="text" name="no_proveedor" value="{{old('no_proveedor')}}"
                                    class="form-control" placeholder="Ingrese el modelo de vehiculo" required
                                    minlegth="1" maxlength="10"
                                    title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_proveedor">Año del vehiculo:</label>
                                <input type="number" name="no_proveedor" value="{{old('no_proveedor')}}"
                                    class="form-control" placeholder="Ingrese año del vehiculo" required pattern="[0-9]"
                                    minlegth="1" maxlength="10"
                                    title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_proveedor">Kilometraje:</label>
                                <input type="text" name="no_proveedor" value="{{old('no_proveedor')}}"
                                    class="form-control" placeholder="Ingrese el modelo de vehiculo" required
                                    minlegth="1" maxlength="10"
                                    title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_proveedor">Placa:</label>
                                <input type="number" name="no_proveedor" value="{{old('no_proveedor')}}"
                                    class="form-control" placeholder="Ingrese placa del vehiculo" required pattern="[0-9]"
                                    minlegth="1" maxlength="10"
                                    title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>Color</label>

                                <select class="form-control select2" id="departamentos"
                                    data-placeholder="Selecciona un Departamento" style="width: 100%;">
                                    <option selected="selected" value="">Selecciona un color</option>
                                    @foreach ($colores as $color)
                                    <option value="{{$color->id}}">{{$color->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="no_proveedor">Número de serie:</label>
                                <input type="text" name="no_proveedor" value="{{old('no_proveedor')}}"
                                    class="form-control" placeholder="Ingrese número de serie de vehiculo" required
                                    minlegth="1" maxlength="10"
                                    title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>Marca</label>

                                <select class="form-control select2" id="departamentos"
                                    data-placeholder="Selecciona un tipo de vehiculo" style="width: 100%;">
                                    <option selected="selected" value="">Selecciona marca</option>
                                    @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>Tipos de vehiculos </label>

                                <select class="form-control select2" id="departamentos"
                                    data-placeholder="Selecciona un Departamento" style="width: 100%;">
                                    <option selected="selected" value="">Selecciona tipo de vehiculo</option>
                                    @foreach ($tipos_vehiculos as $tipo_vehiculo)
                                    <option value="{{$tipo_vehiculo->id}}">{{$tipo_vehiculo->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                    </div>





                    <button class="btn btn-info btn-block">Crear Vehiculo</button>
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
        $('#foto').attr('src', ev2.target.result);
    };
    
    fr.readAsDataURL(f);
    });

    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>





@endpush