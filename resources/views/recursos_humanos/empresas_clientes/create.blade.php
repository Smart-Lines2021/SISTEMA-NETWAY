@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear subempresa para {{$cliente->nombre_empresa}}</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
  <li class="breadcrumb-item active">Recursos Humanos</li>
</ol>
@stop
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Nueva subempresa para el cliente {{$cliente->nombre_empresa}}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.empresas_clientes.store')}}">
          @csrf

          <div class="form-group">
            <label for="nombre">Nombre de la subempresa:</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la subempresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,100}"
            minlegth="4" maxlength="100"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 100"
            value="{{old('nombre')}}">
          </div>

          <div class="form-group">
            <label for="rfc">RFC:</label>
            <input type="text" name="rfc" class="form-control" placeholder="Ingrese el RFC de la subempresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
            minlegth="4" maxlength="40"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
            value="{{old('rfc')}}">
          </div>

          <div class="form-group">
            <label for="domicilio_fiscal">Domicilio fiscal:</label>
            <input type="text" name="domicilio_fiscal" class="form-control" placeholder="Ingrese el domicilio fiscal de la subempresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,100}"
            minlegth="4" maxlength="100"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 100"
            value="{{old('domicilio_fiscal')}}">
          </div>

          <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese el teléfono de la subempresa del cliente" required pattern="[0-9]{4,12}"
            minlegth="4" maxlength="12"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 12"
            value="{{old('telefono')}}">
          </div>

          <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input type="text" name="correo" class="form-control" placeholder="Ingrese el correo electrónico de la subempresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s/.-_@0-9]{4,80}"
            minlegth="4" maxlength="80"
            title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 80"
            value="{{old('correo')}}">
          </div>

          <div class="form-group">
            <label for="horario">Horario:</label>
            <input type="text" name="horario" class="form-control" placeholder="Ingrese el horario de la subempresa del cliente" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,.:0-9]{4,80}" minlegth="4" maxlength="80"
            title="Solo se permiten letras, números y signos de puntuación. Tamaño mínimo: 4. Tamaño máximo: 80"
            value="{{old('horario')}}">
          </div>

          <input type="hidden" id="cliente_id" name="cliente_id" value="{{$cliente->id}}" class="form-control">

          <button class="btn btn-info btn-block">Crear Subempresa</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection



@push('styles')
{{-- Incluimos css de select2
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@include('auxiliares.design-datetime')
@endpush
@push('scripts')
Incluimos js de select2 --}}
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
</script>
@endpush