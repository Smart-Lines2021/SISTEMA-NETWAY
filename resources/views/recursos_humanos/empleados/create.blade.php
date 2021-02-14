@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Alta Empleado</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Nuevo Empleado</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('admin.personas.store')}}">
                    @csrf
                    <h4>Datos personales</h4>
                    <div class="row">


                        <div class="col-md-3 text-left-center">
                            <center>
                                <img class="profile-user-img img-fluid img-circle" id="foto_perfil"
                                src="{{asset('assets/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                            </center>
                        </div>

                        <div class="col-md-3 text-left-right">
                            <div class="form-group">
                                <label for="exampleInputFile">Foto de empleado</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputFoto" name="foto_perfil">
                                        <label class="custom-file-label" for="Foto de empleado">Elegir imagen</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text"  value="{{old('nombre')}}" class="form-control" name="nombre">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                <input type="text"  value="{{old('apellido')}}" class="form-control" name="apellido">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-left-center">
                            <div class="form-group">
                                <label for="curp">CURP</label>
                                <input type="text" name="curp" value="{{old('curp')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rfc">RFC</label>
                                <input type="text" name="rfc" value="{{old('rfc')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" name="correo" value="{{old('correo')}}" class="form-control">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="nss">NSS</label>
                                <input type="text" name="nss" value="{{old('nss')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <input type="text" name="carrera" value="{{old('carrera')}}" class="form-control">
                            </div>
                        </div>


                    </div>
                    <h4>Domicilio</h4>


                    <div class="row">
                        <div class="col-md-4 text-left-center">
                            <div class="form-group">
                                <label for="estado">Estado</label>

                                <select class="form-control select2" id="estadoId"
                                data-placeholder="Seleccione un Estado" style="width: 100%;" name="estado">
                                <option selected="selected" value="">Seleccione un Estado</option>
                                @foreach ($estados as $estado)
                                <option value="{{$estado->nombre}}">{{$estado->nombre}} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <select class="select2" id="municipios" data-placeholder="Seleccione un Municipio"
                            style="width: 100%;" name="municipio">

                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="codigo_postal">Código postal</label>
                        <select class="select2" id="codigos_postales"
                        data-placeholder="Seleccione un Codigo Postal" style="width: 100%;" name="codigo_postal">

                    </select>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="colonia">Colonias</label>
                    <select class="select2" id="colonias" data-placeholder="Seleccione una colonia"
                    style="width: 100%;" name="colonia">

                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="calle">Calle</label>
                <input type="text"  value="{{old('calle')}}" class="form-control" name="calle">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="numero_exterior">Número exterior</label>
                <input type="text"  value="{{old('numero_exterior')}}" class="form-control" name="numero_exterior">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="numero_interior">Número interior</label>
                <input type="text"  value="{{old('numero_interior')}}" class="form-control" name="numero_interior">
            </div>
        </div>

    </div>

    <h4>Informacion laboral</h4>

    <div class="row">
        <div class="col-md-3 text-left-center">
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de ingreso laboral:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input"
                    data-target="#reservationdate" name="fecha_ingreso" />
                    <div class="input-group-append" data-target="#reservationdate"
                    data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 text-left-center">

        <div class="form-group">
            <label for="departamento">Departamento</label>

            <select class="form-control select2" id="departamentos"
            data-placeholder="Seleccione un Departamento" style="width: 100%;" name="departamento">
            <option selected="selected" value="">Seleccione un Departamento</option>
            @foreach ($departamentos as $departamento)
            <option value="{{$departamento->id}}">{{$departamento->nombre}} </option>
            @endforeach

        </select>
    </div>
</div>

<div class="col-md-3 text-left-center">
    <div class="form-group">
        <label for="cargo">Cargo</label>
        <select class="form-control select2" id="cargos" data-placeholder="Seleccione un Cargo"
        style="width: 100%;" name="salario">
        <option selected="selected" value="">Seleccione un Cargo</option>
        @foreach ($cargos as $cargo)
        <option value="{{$cargo->id}}">{{$cargo->nombre}} </option>
        @endforeach

    </select>
</div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="salario">Salario</label>
        <input type="text"  value="{{old('salario')}}" class="form-control" name="salario">
    </div>
</div>
</div>






</div>

<button class="btn btn-info btn-block">Añadir Empleado</button>
</div>

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
            $('#foto_perfil').attr('src', ev2.target.result);
        };

        fr.readAsDataURL(f);
    });

    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>





@endpush