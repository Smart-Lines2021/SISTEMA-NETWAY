@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear Cuenta Bancaria de Taller</h1>
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
                <h3 class="card-title">Nueva Cuenta Bancaria de Taller Mecanico</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('admin.cuentas_bancarias_talleres.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="banco_id">Banco</label>
                        <select class="form-control select2" id="bancos"
                        data-placeholder="Seleccione un Banco" style="width: 100%;" name="banco_id" required>
                        <option selected="selected" value="">Seleccione un Banco</option>
                        @foreach ($bancos as $banco)
                        <option {{ old('banco_id') == $banco->id ? "selected" : "" }}  value="{{$banco->id}}">{{$banco->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="taller_id">Taller</label>
                    <select class="form-control select2" id="talleres"
                    data-placeholder="Seleccione un Taller" style="width: 100%;" name="taller_id" required>
                    <option selected="selected" value="">Seleccione un Taller</option>
                    @foreach ($talleresMecanicos as $tallerMecanico)
                    <option {{ old('taller_id') == $tallerMecanico->id ? "selected" : "" }}  value="{{$tallerMecanico->id}}">{{$tallerMecanico->nombre}} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="no_cuenta">Numero de Cuenta</label>
              <input type="text" name="no_cuenta" class="form-control" placeholder="Ingrese el numero de cuenta de la cuenta" required pattern="[0-9]{24,24}"
              minlegth="24" maxlength="24"
              title="Solo se permiten números. Tamaño mínimo: 24. Tamaño máximo: 24"
              value="{{old('no_cuenta')}}">
          </div>
          <div class="form-group">
              <label for="clabe_interbancaria">Clabe Interbancaria:</label>
              <input type="text" name="clabe_interbancaria" class="form-control" placeholder="Ingrese la clabe interbancaria de la cuenta" required pattern="[0-9]{18,18}"
              minlegth="18" maxlength="18"
              title="Solo se permiten numeros. Tamaño mínimo: 18. Tamaño máximo: 18"
              value="{{old('clabe_interbancaria')}}">
          </div>
          <button class="btn btn-info btn-block">Crear Cuenta Bancaria</button>
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