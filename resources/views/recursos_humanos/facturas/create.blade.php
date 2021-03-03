@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear Factura</h1>
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
        <h3 class="card-title">Nuevo Factura</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body" style="display: block;">
        <form method="POST" action="{{route('rh.facturas.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="url">Factura:</label>
            <input type="file" name="url" class="form-control"
            value="{{old('url')}}">
          </div>
          <div class="form-group">
            <label for="url_pdf">PDF:</label>
            <input type="file" name="url_pdf" class="form-control"
            value="{{old('url_pdf')}}" required>
          </div>
          <div class="form-group">
                        <label for="cliente_id">Clientes</label>
                        <select class="form-control select2" id="clientes"
                        data-placeholder="Seleccione el cliente a facturar" style="width: 100%;" name="cliente_id" required>
                        <option selected="selected" value="">Seleccione el cliente a facturar</option>
                        @foreach ($clientes as $cliente)
                        <option {{ old('cliente_id') == $cliente->id ? "selected" : "" }}  value="{{$cliente->id}}">{{$cliente->nombre_empresa}} </option>
                        @endforeach
                    </select>
                </div>
          <button class="btn btn-info btn-block">Cargar Factura</button>
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
