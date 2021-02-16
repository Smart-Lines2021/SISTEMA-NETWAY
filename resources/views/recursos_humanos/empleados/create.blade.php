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
                                        <input type="file" class="custom-file-input" id="inputFoto">
                                        <label class="custom-file-label" for="Foto de empleado">Elegir imagen</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" value="{{old('nombre')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" name="name" value="{{old('apellidos')}}" class="form-control">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-left-center">
                            <div class="form-group">
                                <label>CURP</label>
                                <input type="text" name="name" value="{{old('curp')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>RFC</label>
                                <input type="text" name="name" value="{{old('rfc')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input type="email" name="name" value="{{old('correo')}}" class="form-control">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>NSS</label>
                                <input type="text" name="name" value="{{old('no_seguro')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Carrera</label>
                                <input type="text" name="name" value="{{old('carrera')}}" class="form-control">
                            </div>
                        </div>


                    </div>
                    <h4>Domicilio</h4>


                    <div class="row">
                        <div class="col-md-4 text-left-center">
                            <div class="form-group">
                                <label>Estado</label>

                                <select class="form-control select2" id="estadoId" name="estado_id"
                                    data-placeholder="Selecciona un Estado" style="width: 100%;">
                                    <option selected="selected" value="">Selecciona un Estado</option>
                                    @foreach ($estados as $estado)
                                    <option value="{{$estado->nombre}}">{{$estado->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Municipio</label>
                                <select class="select2" id="municipios" name="nombre_municipio"
                                    data-placeholder="Selecciona un Municipio" style="width: 100%;">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Código postal</label>
                                <select class="select2" id="codigos_postales"
                                    data-placeholder="Selecciona un Codigo Postal" name="codigo_postal"
                                    style="width: 100%;">

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Colonias</label>
                                <select class="select2" id="colonias" name="colonia"
                                    data-placeholder="Selecciona una colonia" style="width: 100%;">

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" name="name" value="{{old('calle')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Número exterior</label>
                                <input type="text" name="name" value="{{old('')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Número interior</label>
                                <input type="text" name="name" value="{{old('nombre')}}" class="form-control">
                            </div>
                        </div>

                    </div>

                    <h4>Informacion laboral</h4>

                    <div class="row">
                        <div class="col-md-3 text-left-center">
                            <div class="form-group">
                                <label>Fecha de ingreso laboral:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input"
                                        data-target="#fecha_comienzo" />
                                    <div class="input-group-append" data-target="#fecha_comienzo"
                                        data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-left-center">

                            <div class="form-group">
                                <label>Departamento</label>

                                <select class="form-control select2" id="departamentos"
                                    data-placeholder="Selecciona un Departamento" name="departamento_id"
                                    style="width: 100%;">
                                    <option selected="selected" value="">Selecciona un Departamento</option>
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{$departamento->id}}">{{$departamento->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3 text-left-center">
                            <div class="form-group">
                                <label>Cargo</label>
                                <select class="form-control select2" name="cargo_id" id="cargos"
                                    data-placeholder="Selecciona un Cargo" style="width: 100%;">
                                    <option selected="selected" value="">Selecciona un Cargo</option>
                                    @foreach ($cargos as $cargo)
                                    <option value="{{$cargo->id}}">{{$cargo->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Salario</label>
                                <input type="text" onkeypress=" return soloNumeros(event);" name="salario"
                                    value="{{old('salario')}}" class="form-control input-numeral">
                            </div>
                        </div>
                    </div>






            </div>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script src="{{asset('js/auxiliar_input.js')}}"></script>
@include('auxiliares.scripts-design-datetime')

<script src="{{asset('js/api_sepomex.js')}}"></script>
<script>
    $(function () {
    //Initialize Select2 Elements
        $('.select2').select2()
        $('#fecha_comienzo').datetimepicker({
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

   
    var cleaveNumeral = new Cleave('.input-numeral', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
    });

</script>





@endpush