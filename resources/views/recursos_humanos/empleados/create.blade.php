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
                        <div class="col-md-4 text-left-center">
                            <center>
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{asset('assets/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                            </center>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" value="{{old('nombre')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
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
                                <input type="text" name="name" value="{{old('correo')}}" class="form-control">
                            </div>
                            <!-- /.form-group -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>NSS</label>
                                <input type="text" name="name" value="{{old('curp')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Carrera</label>
                                <input type="text" name="name" value="{{old('rfc')}}" class="form-control">
                            </div>
                        </div>


                    </div>
                    <h4>Domicilio</h4>


                    <div class="row">
                        <div class="col-md-6 text-left-center">
                            <div class="form-group">
                                <label>Estado</label>

                                <select class="form-control select2" id="estadoId" 
                                    data-placeholder="Selecciona un Estado" style="width: 100%;">
                                    @foreach ($estados as $estado)
                                    <option value="{{$estado->nombre}}">{{$estado->nombre}} </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Municipio</label>
                                <select class="select2" id="municipios"
                                    data-placeholder="Selecciona un Municipio" style="width: 100%;">

                                </select>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-6 text-left-center">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="name" value="{{old('curp')}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Colonia</label>
                            <input type="text" name="name" value="{{old('rfc')}}" class="form-control">
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
@endpush
@push('scripts')
{{-- Incluimos js de select2 --}}
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
    //Initialize Select2 Elements
        $('.select2').select2()
    })

  $(document).ready(function(){
    $("#estadoId").change(function(){
      var estado = $(this).val();
    
      $.get('https://api-sepomex.hckdrk.mx/query/get_municipio_por_estado/'+estado, function(data){
        //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
       // console.log(data);
       // console.log(data['response']['municipios'].length);
          var municipios_select = '<option value="">Seleccione Porducto</option>';
        
            for (var i=0; i<data['response']['municipios'].length;i++)
            
              municipios_select+='<option value="'+data['response']['municipios'][i]+'">'+data['response']['municipios'][i]+'</option>';

            $("#municipios").html(municipios_select);

      });
    });
  });

</script>

@endpush