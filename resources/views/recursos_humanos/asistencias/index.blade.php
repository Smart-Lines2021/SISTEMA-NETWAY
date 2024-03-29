@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Asistencias</h1>
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
          <h3 class="card-title">Tabla de Asistencias</h3>
        </div>
        <br>
        <br>
        <hr>
        <!-- /.card-header -->
        <div class="card-body" id="divTabla">

         <form action="{{route('rh.asistencias.store')}}" method="POST">
          @csrf
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label for="persona_id">Empleado:</label>
                <select class="form-control select2" id="empleados"
                data-placeholder="Seleccione el empleado" style="width: 100%;" name="persona_id" required>
                <option selected="selected" value="">Seleccione el empleado</option>
                @foreach ($empleados as $empleado)
                <option {{ old('persona_id') == $empleado->id ? "selected" : "" }}  value="{{$empleado->id}}">{{$empleado->nombre.' '.$empleado->apellido}} </option>
                @endforeach
              </select>

            </div>
            <div class="form-group">
              <label for="horario_id">Horario:</label>
              <select class="form-control select2" id="horarios"
              data-placeholder="Seleccione el empleado" style="width: 100%;" name="horario_id" required>
              <option selected="selected" value="">Seleccione el empleado</option>
              @foreach ($horarios as $horario)
              <option {{ old('horario_id') == $horario->id ? "selected" : "" }}  value="{{$horario->id}}">{{$horario->dia_inicio.' - '.$horario->dia_final.' '.$horario->hora_entrada.'-'.$horario->hora_salida}} </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control select2" id="estado"
            data-placeholder="Seleccione una opción" style="width: 100%;" name="estado" required>
            <option selected="selected" value="">Seleccione una opción</option>
            <option {{old('estado')}}  value="Presente">Presente</option>
            <option {{old('estado')}}  value="Ausente">Ausente</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Fecha:</label>
          <input type="date" name="fecha" value="{{date('Y-m-d')}}" class="form-control">
        </div>
      </div>
    </div>
    <div class="align-self-center text-center">
      <input type="submit" class="btn btn-lg btn-primary" name="" value="Enviar">
    </div>
  </form>
  <br>
  <div class="clearfix"></div>
  <div class="box-tools float-right">
    <form action="{{route('rh.asistencias.index')}}" method="get" onsubmit="return showLoad()">
      <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="consulta" class="form-control float-right" placeholder="Buscar" value="{{$consulta}}">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-sm"><i class="fa fa-search"></i></button>
        </div>
      </div>
      <br>
    </form>
  </div>
  @if(isset($consulta))
  <button onclick="descargarTabla('table_id', 'Asistencias de {{$consulta}}')" class="btn btn-secondary">Descargar Con Nombre</button>
  @else
  <button onclick="descargarTabla('table_id', 'Asistencias de {{date('Y-m-d')}}')" class="btn btn-secondary">Descargar con Fecha</button>
  @endif
  <table id="table_id" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Empleado</th>
        <th>Departamento</th>
        <th>Horarios</th>
        <th>Asistio</th>
        <th>Turno</th>
        <th>Opciones</th>

      </tr>
    </thead>
    <tbody>
      @foreach($asistencias as $asistencia)
      <tr>
        <td>{{$asistencia->persona->nombre.' '.$asistencia->persona->apellido}}</td>
        <td>{{$asistencia->persona->informacionesLaborales->last()->departamento->nombre}}</td>
        <td>{{$asistencia->horario->dia_inicio.' - '.$asistencia->horario->dia_final.' '.$asistencia->horario->hora_entrada.'-'.$asistencia->horario->hora_salida}}</td>
        <td>{{$asistencia->estado}}</td>
        @if(isset($asistencia->hora_salida))
        <td>Finalizado</td>
        @else
        <td>En Jornada Laboral</td>
        @endif
        <td>
          <center>
            <div class="btn-group">
              <button type="button" class="btn btn-info btn-flat">Opciones</button>
              <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                {{-- <span class="sr-only"></span> --}}
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" data-target="#modal-hora-salida-{{$asistencia->id}}" data-toggle="modal"><i class="fas fa-user-times"></i>Marcar Salida</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('rh.asistencias.edit',Crypt::encryptString($asistencia->id))}}"><i class="fas fa-user-edit"></i> Editar</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-target="#modal-destroy-{{$asistencia->id}}" data-toggle="modal"><i class="fas fa-user-times"></i> Eliminar</a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </center>
        </td>
      </tr>
       @include('recursos_humanos.asistencias.destroy')
       @include('recursos_humanos.asistencias.hora_salida')
      @endforeach

    </tbody>
  </table>
  {{$asistencias->links()}}{{--  Paginación --}}
</div>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>

@stop
{{-- @push('styles')
Incluimos los links del diseño de la tabla de un solo archivo
@include('auxiliares.design-datatables')
@endpush --}}
@push('scripts')
<script type="text/javascript">
  function descargarTabla(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel' +  ';charset=utf-8';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    // Create download link element
    downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);
    if(navigator.msSaveOrOpenBlob){
      var blob = new Blob(['ufeff', tableHTML], {
        type: dataType
      });
      navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
        // Setting the file name
        downloadLink.download = filename;
        //triggering the function
        downloadLink.click();
      }
    }
  </script>
  {{-- Incluimos los scripts de la tabla de un solo archivo --}}
  {{-- @include('auxiliares.scripts-datatables') --}}
  {{-- Scripts para el select2 --}}
{{-- <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function () {
    $('.select2').select2()
})
</script> --}}
@endpush
