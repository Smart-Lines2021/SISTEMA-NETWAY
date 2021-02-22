@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar domicilio para {{$proveedor->nombre}}</h1>
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
        <h3 class="card-title">Editar domicilio para el proveedor {{$proveedor->nombre}}</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.domicilios_proveedores.update',Crypt::encryptString($proveedor->id))}}">
          @method('PUT')
          @csrf

          <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control select2" id="estadoId"
            data-placeholder="Seleccione un Estado" style="width: 100%;" name="estado" required>
            <option {{ old('estado') == $domicilio->estado ? "selected" : "" }} value="{{$domicilio->estado}}"> {{$domicilio->estado}}</option>
            @foreach ($estados as $estado)
            <option {{ old('estado') == $estado->nombre ? "selected" : "" }} value="{{$estado->nombre}}">{{$estado->nombre}} </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="municipio">Municipio:</label>
          <select class="select2" id="municipios" data-placeholder="Seleccione un Municipio"
          style="width: 100%;" name="municipio" required>
          <option {{ old('municipio') == $domicilio->municipio ? "selected" : "" }} value="{{$domicilio->municipio}}"> {{$domicilio->municipio}}</option>
          @if($errors->any())
          <option {{old('municipio')}}>{{old('municipio')}}</option>
          @endif
        </select>
      </div>
      <div class="form-group">
        <label for="codigo_postal">Código postal:</label>
        <select class="select2" id="codigos_postales"
        data-placeholder="Seleccione un Codigo Postal" style="width: 100%;" name="codigo_postal" required>
        <option {{ old('codigo_postal') == $domicilio->codigo_postal ? "selected" : "" }} value="{{$domicilio->codigo_postal}}"> {{$domicilio->codigo_postal}}</option>
        @if($errors->any())
        <option {{old('codigo_postal')}}>{{old('codigo_postal')}}</option>
        @endif
      </select>
    </div>
    <div class="form-group">
      <label for="colonia">Colonia:</label>
      <select class="select2" id="colonias" data-placeholder="Seleccione una colonia"
      style="width: 100%;" name="colonia" required>
      <option {{ old('colonia') == $domicilio->colonia ? "selected" : "" }} value="{{$domicilio->colonia}}"> {{$domicilio->colonia}}</option>
      @if($errors->any())
      <option {{old('colonia')}}>{{old('colonia')}}</option>
      @endif
    </select>
  </div>

  <div class="form-group">
    <label for="calle">Calle:</label>
    <input type="text" name="calle" class="form-control" placeholder="Ingrese el nombre de la calle" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,0-9]{4,40}"
    minlegth="4" maxlength="40"
    title="Solo se permiten letras y números. Tamaño mínimo: 4. Tamaño máximo: 40"
    value="{{old('calle',$domicilio->calle)}}">
  </div>
  <div class="form-group">
    <label for="numero_exterior">Número exterior:</label>
    <input type="text" name="numero_exterior" class="form-control" placeholder="Ingrese el número exterior" required pattern="[0-9]{1,5}"
    minlegth="1" maxlength="5"
    title="Solo se permiten letras y números. Tamaño mínimo: 1. Tamaño máximo: 5"
    value="{{old('numero_exterior',$domicilio->numero_exterior)}}">
  </div>
  <div class="form-group">
    <label for="numero_interior">Número interior:</label>
    <input type="text" name="numero_interior" class="form-control" placeholder="Ingrese el número interior" required pattern="[0-9]{1,5}"
    minlegth="1" maxlength="5"
    title="Solo se permiten letras y números. Tamaño mínimo: 1. Tamaño máximo: 5"
    value="{{old('numero_interior',$domicilio->numero_interior)}}">
  </div>
  
  <input type="hidden" id="proveedor_id" name="proveedor_id" value="{{$proveedor->id}}" class="form-control">

  <button class="btn btn-info btn-block">Editar Domicilio</button>
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
</script>
@endpush