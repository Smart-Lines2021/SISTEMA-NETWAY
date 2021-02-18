@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Proveedor</h1>
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
                <h3 class="card-title">Editar Proveedor</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('rh.proveedores.update',Crypt::encryptString($proveedor->id))}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="no_proveedor">Numero de proveedor:</label>
                        <input type="number" name="no_proveedor" value="{{old('no_proveedor',$proveedor->no_proveedor)}}" class="form-control" placeholder="Ingrese el número del proveedor" required pattern="[0-9]" minlegth="1" maxlength="10" title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 10">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre del proveedor: </label>
                        <input type="text" name="nombre" value="{{old('nombre',$proveedor->nombre)}}" class="form-control" placeholder="Ingrese el nombre del proveedor" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" minlegth="2" maxlength="40" title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del proveedor: </label>
                        <textarea type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripción del proveedor" value="{{old('descripcion')}}" class="form-control" minlength="2" maxlength="80" title="Ingrese solamente Letras y Números. Tamaño mínimo: 2. Tamaño máximo: 80" required>{{$proveedor->descripcion}}</textarea>
                    </div>
                     <div class="form-group">
                        <label for="persona_contacto">Nombre de la persona a contactar: </label>
                        <input type="text" name="persona_contacto" value="{{old('persona_contacto',$proveedor->persona_contacto)}}" class="form-control" placeholder="Ingrese el nombre de la persona a contactar" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" minlegth="2" maxlength="40" title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40">
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo:</label>
                        <input type="number" name="saldo" value="{{old('saldo',$proveedor->saldo)}}" class="form-control" placeholder="Ingrese el saldo" minlength="1" maxlength="10" required pattern="[0-9]" title="Ingrese solamente números. Tamaño mínimo: 1. Tamaño máximo: 10">
                    </div>
                    <div class="form-group">
                    <label for="categoria_proveedor_id">Categoría del proveedor:</label>
                    <select id="categoria_proveedor_id" name="categoria_proveedor_id" class="form-control" required title="Por favor, seleccione la categoría del proveedor.">
                        <option value="{{ $proveedor->categoriaProveedor->id }}">{{ $proveedor->categoriaProveedor->nombre }}</option>
                        @foreach ($categorias_proveedores as $categoria_proveedor)
                        <option value="{{ $categoria_proveedor->id }}">{{ $categoria_proveedor->nombre }}</option>
                        @endforeach
                    </select>
                    </div>
                    <button class="btn btn-info btn-block">Actualizar Proveedor</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection