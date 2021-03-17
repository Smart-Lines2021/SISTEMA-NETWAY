@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Asistencia</h1>
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
        <h3 class="card-title">Editar Asistencia</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.asistencias.update',Crypt::encryptString($asistencia->id))}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="persona_id">Empleado:</label>
            <select class="form-control select2" id="empleados"
            data-placeholder="Seleccione el empleado" style="width: 100%;" name="persona_id" required>
            <option {{ old('persona_id') == $asistencia->persona_id ? "selected" : "" }} value="{{$asistencia->persona_id}}"> {{$asistencia->persona->nombre.' '.$asistencia->persona->apellido}}</option>
            @foreach ($empleados as $empleado)
            <option {{ old('persona_id') == $empleado->id ? "selected" : "" }}  value="{{$empleado->id}}">{{$empleado->nombre.' '.$empleado->apellido}} </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="horario_id">Horario:</label>
          <select class="form-control select2" id="horarios"
          data-placeholder="Seleccione el empleado" style="width: 100%;" name="horario_id" required>
          <option {{ old('horario_id') == $asistencia->horario_id ? "selected" : "" }} value="{{$asistencia->horario_id}}"> {{$asistencia->horario->dias.' '.$asistencia->horario->hora_entrada.'-'.$asistencia->horario->hora_salida}}</option>
          @foreach ($horarios as $horario)
          <option {{ old('horario_id') == $horario->id ? "selected" : "" }}  value="{{$horario->id}}">{{$horario->dias.' '.$horario->hora_entrada.'-'.$horario->hora_salida}} </option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="estado">Estado:</label>
        <select class="form-control select2" id="estados"
        data-placeholder="Seleccione una opción" style="width: 100%;" name="estado" required>
        <option {{ old('estado') == $asistencia->estado ? "selected" : "" }} value="{{$asistencia->estado}}"> {{$asistencia->estado}}</option>
        <option {{ old('estado')}}  value="Presente">Presente</option>
        <option {{ old('estado')}}  value="Ausente">Ausente</option>
      </select>
    </div>
    <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" name="fecha" value="{{old('fecha',$asistencia->fecha)}}" class="form-control">
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
