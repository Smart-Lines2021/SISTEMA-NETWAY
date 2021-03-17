@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Permisos de Empleados</h1>
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
          <h3 class="card-title">Tabla de Permisos de Empleados</h3>
        </div>
        <br>
        <br>
        <hr>
        <!-- /.card-header -->
        <div class="card-body" id="divTabla">

         <form action="{{route('rh.permisos_empleados.store')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="persona_id">Empleado:</label>
                <select class="form-control select2" id="empleados"
                data-placeholder="Seleccione el empleado" style="width: 100%;" name="persona_id" required>
                <option selected="selected" value="">Seleccione el empleado</option>
                @foreach ($asistencias as $empleado)
                <option {{ old('persona_id') == $empleado->persona->id ? "selected" : "" }}  value="{{$empleado->persona->id}}">{{$empleado->persona->nombre.' '.$empleado->persona->apellido}} </option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="asistencia_id">Empleado:</label>
              <select class="form-control select2" id="empleados"
              data-placeholder="Seleccione la fecha de asistencia" style="width: 100%;" name="asistencia_id" required>
              <option selected="selected" value="">Seleccione la fecha de asistencia</option>
              @foreach ($asistencias as $asistencia)
              <option {{ old('asistencia_id') == $asistencia->id ? "selected" : "" }}  value="{{$asistencia->id}}">{{$asistencia->fecha.' '.$asistencia->persona->nombre.' '.$asistencia->persona->apellido}} </option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label for="razon_permiso_id">Justificación:</label>
            <select class="form-control select2" id="empleados"
            data-placeholder="Seleccione la justificación" style="width: 100%;" name="razon_permiso_id" required>
            <option selected="selected" value="">Seleccione la justificación</option>
            @foreach ($justificaciones as $justificacion)
            <option {{ old('razon_permiso_id') == $justificacion->id ? "selected" : "" }}  value="{{$justificacion->id}}">{{$justificacion->descripcion.' '.$justificacion->duracion}} </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="fecha_inicio">Fecha de Inicio:</label>
          <input type="date" name="fecha_inicio" value="{{date('Y-m-d')}}" class="form-control">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="fecha_fin">Fecha de Terminación:</label>
          <input type="date" name="fecha_fin" value="{{date('Y-m-d')}}" class="form-control">
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
  <form action="{{route('rh.permisos_empleados.index')}}" method="get" onsubmit="return showLoad()">
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
        <th>Motivo</th>
        <th>Dias Ausente</th>
      </tr>
    </thead>
    <tbody>
      @foreach($permisosEmpleados as $permiso)
      <tr>
        <td>{{$permiso->persona->nombre.' '.$permiso->persona->apellido}}</td>
        <td>{{$permiso->persona->informacionesLaborales->last()->departamento->nombre}}</td>
        <td>{{$permiso->razonPermiso->descripcion}}</td>
        <td>{{$permiso->fecha_inicio.'-'.$permiso->fecha_fin}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
   {{$permisosEmpleados->links()}}{{-- Paginación --}}
</div>
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
    var dataType = 'application/vnd.ms-excel';
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
