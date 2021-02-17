@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Modificar Empleado</h1>
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
                <h3 class="card-title">{{$persona->nombre}} {{$persona->apellido}}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('admin.personas.update',$persona->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h4>Datos personales</h4>
                    <div class="row">


                        <div class="col-md-3 text-left-center">
                            <center>
                            @if($persona->foto_perfil !== 'avatar.png')
                                <img class="profile-user-img img-fluid img-circle" id="foto_perfil"
                                src="{{Storage::url($persona->foto_perfil)}}" alt="User profile picture">
                            @else
                            <img class="profile-user-img img-fluid img-circle" id="foto_perfil"
                                src="{{asset('images/empleados.jpg')}}" alt="User profile picture">
                            @endif
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
                                <input type="text"  value="{{old('nombre',$persona->nombre)}}" class="form-control" name="nombre" minlength="2" maxlength="25" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,25}" title="Solamente se aceptan letras. Tamaño mínimo: 2. Tamaño máximo: 25." placeholder="Ingrese el nombre del empleado">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                <input type="text"  value="{{old('apellido',$persona->apellido)}}" class="form-control" name="apellido" minlength="2" maxlength="40" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" title="Solamente se aceptan letras. Tamaño mínimo: 2. Tamaño máximo: 40." placeholder="Ingrese el apellido del empleado">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-left-center">
                            <div class="form-group">
                                <label for="curp">CURP</label>
                                <input type="text" name="curp" value="{{old('curp',$persona->curp)}}" class="form-control" minlength="18" maxlength="18"
                                required pattern="([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)" placeholder="Ingrese la CURP del empleado" title="El formato debe ser como en la credencial.">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rfc">RFC</label>
                                <input type="text" name="rfc" value="{{old('rfc',$persona->rfc)}}" class="form-control" required
                                pattern="([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})"
                                min="12" max="13" placeholder="Ingrese el RFC del empleado" title="El formato debe ser como en el Registro Federal de Contribuyentes.">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" name="correo" value="{{old('correo',$persona->correo)}}" class="form-control" required placeholder="Ingrese el correo electronico del empleado">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label for="nss">NSS</label>
                                <input type="text" name="nss" value="{{old('nss',$persona->nss)}}" class="form-control" minlength="8" maxlength="8" required pattern="[0-9]{8,8}" title="Solamente se aceptan números. Tamaño mínimo: 8. Tamaño máximo: 8." placeholder="Ingrese el NSS del empleado">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <input type="text" name="carrera" value="{{old('carrera',$persona->carrera)}}" class="form-control" minlength="2" maxlength="30" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,30}" title="Solamente se aceptan letras. Tamaño mínimo: 2. Tamaño máximo: 30." placeholder="Ingrese la escolaridad del empleado">
                            </div>
                        </div>


                    </div>
                    <h4>Domicilio</h4>


                    <div class="row">
                        <div class="col-md-4 text-left-center">
                            <div class="form-group">
                                <label for="estado">Estado</label>

                                <select class="form-control select2" id="estadoId"
                                data-placeholder="Seleccione un Estado" style="width: 100%;" name="estado" required>
                                <option {{ old('estado') == $domicilio->estado ? "selected" : "" }} value="{{$domicilio->estado}}"> {{$domicilio->estado}}</option>
                                @foreach ($estados as $estado)
                                <option {{ old('estado') == $estado->nombre ? "selected" : "" }} value="{{$estado->nombre}}">{{$estado->nombre}} </option>
                                @endforeach

                            </select>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="municipio">Municipio</label>
                            <select class="select2" id="municipios" data-placeholder="Seleccione un Municipio"
                            style="width: 100%;" name="municipio" required>
                            <option {{ old('municipio') == $domicilio->municipio ? "selected" : "" }} value="{{$domicilio->municipio}}"> {{$domicilio->municipio}}</option>
                            @if($errors->any())
                            <option {{old('municipio')}}>{{old('municipio')}}</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="codigo_postal">Código postal</label>
                        <select class="select2" id="codigos_postales"
                        data-placeholder="Seleccione un Codigo Postal" style="width: 100%;" name="codigo_postal" required>
                        <option {{ old('codigo_postal') == $domicilio->codigo_postal ? "selected" : "" }} value="{{$domicilio->codigo_postal}}"> {{$domicilio->codigo_postal}}</option>
                        @if($errors->any())
                        <option {{old('codigo_postal')}}>{{old('codigo_postal')}}</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="colonia">Colonias</label>
                    <select class="select2" id="colonias" data-placeholder="Seleccione una colonia"
                    style="width: 100%;" name="colonia" required>
                    <option {{ old('colonia') == $domicilio->colonia ? "selected" : "" }} value="{{$domicilio->colonia}}"> {{$domicilio->colonia}}</option>
                    @if($errors->any())
                    <option {{old('colonia')}}>{{old('colonia')}}</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="calle">Calle</label>
                <input type="text"  value="{{old('calle',$domicilio->calle)}}" class="form-control" name="calle" minlength="2" maxlength="40" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" title="Solamente se aceptan letras. Tamaño mínimo: 2. Tamaño máximo: 40." placeholder="Ingrese la calle del domicilio del empleado">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="numero_exterior">Número exterior</label>
                <input type="text"  value="{{old('numero_exterior',$domicilio->numero_exterior)}}" class="form-control" name="numero_exterior" minlength="1" maxlength="5" required pattern="[0-9]{1,5}" title="Solamente se aceptan números. Tamaño mínimo: 1. Tamaño máximo: 5." placeholder="Ingrese número exterior del domicilio">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label for="numero_interior">Número interior</label>
                <input type="text"  value="{{old('numero_interior',$domicilio->numero_interior)}}" class="form-control" name="numero_interior" minlength="1" maxlength="5" required pattern="[0-9]{1,5}" title="Solamente se aceptan números. Tamaño mínimo: 1. Tamaño máximo: 5." placeholder="Ingrese número interior del domicilio">
            </div>
        </div>

    </div>

    <h4>Informacion laboral</h4>

    <div class="row">
        <div class="col-md-3 text-left-center">
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de ingreso laboral:</label>
                <input value="{{old('fecha_ingreso',$informacionLaboral->fecha_ingreso)}}" type="date" name="fecha_ingreso" class="form-control" required>
            </div>
        </div>
        <div class="col-md-3 text-left-center">

            <div class="form-group">
                <label for="departamento_id">Departamento</label>

                <select class="form-control select2" id="departamentos"
                data-placeholder="Seleccione un Departamento" style="width: 100%;" name="departamento_id" required>
                <option {{ old('departamento_id') == $informacionLaboral->departamento_id ? "selected" : "" }} value="{{$informacionLaboral->departamento_id}}"> {{$informacionLaboral->departamento->nombre}}</option>
                @foreach ($departamentos as $departamento)
                <option {{ old('departamento_id') == $departamento->id ? "selected" : "" }}  value="{{$departamento->id}}">{{$departamento->nombre}} </option>
                @endforeach

            </select>
        </div>
    </div>

    <div class="col-md-3 text-left-center">
        <div class="form-group">
            <label for="cargo_id">Cargo</label>
            <select class="form-control select2" id="cargos" data-placeholder="Seleccione un Cargo"
            style="width: 100%;" name="cargo_id" required>
            <option {{ old('cargo_id') == $informacionLaboral->cargo_id ? "selected" : "" }} value="{{$informacionLaboral->cargo_id}}"> {{$informacionLaboral->cargo->nombre}}</option>
            @foreach ($cargos as $cargo)
            <option {{ old('cargo_id') == $cargo->id ? "selected" : "" }} value="{{$cargo->id}}">{{$cargo->nombre}} </option>
            @endforeach

        </select>
    </div>
</div>

<div class="col-md-3">
    <div class="form-group">
        <label for="salario">Salario</label>
        <input type="text"  value="{{old('salario',$informacionLaboral->salario)}}" class="form-control" name="salario" minlength="1" maxlength="5" required pattern="[0-9]{1,5}" title="Solamente se aceptan números. Tamaño mínimo: 1. Tamaño máximo: 5." placeholder="Ingrese el monto del salario del empleado">
    </div>
</div>
</div>






</div>

<button class="btn btn-info btn-block">Actualizar Información</button>
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