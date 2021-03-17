@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Permiso de Empleado</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
  <li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Editar Permiso de Empleado</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.permisos_empleados.update',Crypt::encryptString($permisoEmpleado->id))}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         <div class="form-group">
                <label for="persona_id">Empleado:</label>
                <select class="form-control select2" id="empleados"
                data-placeholder="Seleccione el empleado" style="width: 100%;" name="persona_id" required>
               <option {{ old('persona_id') == $permisoEmpleado->persona_id ? "selected" : "" }} value="{{$permisoEmpleado->persona_id}}"> {{$permisoEmpleado->persona->nombre.' '.$permisoEmpleado->persona->apellido}}</option>
                @foreach ($asistencias as $empleado)
                <option {{ old('persona_id') == $empleado->persona->id ? "selected" : "" }}  value="{{$empleado->persona->id}}">{{$empleado->persona->nombre.' '.$empleado->persona->apellido}} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="asistencia_id">Asistencia:</label>
              <select class="form-control select2" id="asistencias"
              data-placeholder="Seleccione la fecha de asistencia" style="width: 100%;" name="asistencia_id" required>
              <option {{ old('asistencia_id') == $permisoEmpleado->asistencia_id ? "selected" : "" }} value="{{$permisoEmpleado->asistencia_id}}"> {{$permisoEmpleado->asistencia->fecha.' '.$permisoEmpleado->persona->nombre.' '.$permisoEmpleado->persona->apellido}}</option>
              @foreach ($asistencias as $asistencia)
              <option {{ old('asistencia_id') == $asistencia->id ? "selected" : "" }}  value="{{$asistencia->id}}">{{$asistencia->fecha.' '.$asistencia->persona->nombre.' '.$asistencia->persona->apellido}} </option>
              @endforeach
            </select>
          </div>
           <div class="form-group">
            <label for="razon_permiso_id">Justificación:</label>
            <select class="form-control select2" id="justificaciones"
            data-placeholder="Seleccione la justificación" style="width: 100%;" name="razon_permiso_id" required>
             <option {{ old('razon_permiso_id') == $permisoEmpleado->razon_permiso_id ? "selected" : "" }} value="{{$permisoEmpleado->razon_permiso_id}}"> {{$permisoEmpleado->razonPermiso->descripcion.' '.$permisoEmpleado->razonPermiso->duracion}}</option>
            @foreach ($justificaciones as $justificacion)
            <option {{ old('razon_permiso_id') == $justificacion->id ? "selected" : "" }}  value="{{$justificacion->id}}">{{$justificacion->descripcion.' '.$justificacion->duracion}} </option>
            @endforeach
          </select>
        </div>
         <div class="form-group">
          <label for="fecha_inicio">Fecha de Inicio:</label>
          <input type="date" name="fecha_inicio" value="{{old('fecha_inicio',$permisoEmpleado->fecha_inicio)}}" class="form-control">
        </div>
         <div class="form-group">
          <label for="fecha_fin">Fecha de Terminación:</label>
          <input type="date" name="fecha_fin" value="{{old('fecha_fin',$permisoEmpleado->fecha_fin)}}" class="form-control">
        </div>

    <div class="align-self-center text-center">
      <input type="submit" class="btn btn-lg btn-primary" name="" value="Modificar">
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
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush
@push('scripts')
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
@endpush
