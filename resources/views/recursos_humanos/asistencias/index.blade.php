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
          <a class="btn btn-secondary float-right" style="color: white" data-target="#modal-create" data-toggle="modal">
            <i class="fa fa-plus" role="button"></i> Añadir Asistencia
          </a>
          {{-- @include('recursos_humanos.razones_permisos.create') --}}
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
              <option {{ old('horario_id') == $horario->id ? "selected" : "" }}  value="{{$horario->id}}">{{$horario->dias.' '.$horario->hora_entrada.'-'.$horario->hora_salida}} </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control select2" id="estados"
            data-placeholder="Seleccione una opción" style="width: 100%;" name="estado" required>
            <option selected="selected" value="">Seleccione una opción</option>
            <option {{ old('estado')}}  value="Presente">Presente</option>
            <option {{ old('estado')}}  value="Ausente">Ausente</option>
            <option {{ old('estado')}}  value="Justificado">Justificado</option>
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
  <table id="table_id" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Empleado</th>
        <th>Departamento</th>
        <th>Horarios</th>
        <th>Asistio</th>
        <th>Fecha</th>
              {{--   <th>Descripción</th>
                <th>Duración</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($asistencias as $asistencia)
              <tr>
                <td>{{$asistencia->persona->nombre.' '.$asistencia->persona->apellido}}</td>
                <td>{{$asistencia->persona->informacionesLaborales->last()->departamento->nombre}}</td>
                <td>{{$asistencia->horario->dias.' '.$asistencia->horario->hora_entrada.'-'.$asistencia->horario->hora_salida}}</td>
                <td>{{$asistencia->estado}}</td>
                <td>{{$asistencia->fecha}}</td>
              </tr>
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
