@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Editar Producto</h1>
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
                <h3 class="card-title">Editar Producto</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form method="POST" action="{{route('rh.productos.update',Crypt::encryptString($producto->id))}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del producto: </label>
                        <input type="text" name="nombre" value="{{old('nombre',$producto->nombre)}}" class="form-control" placeholder="Ingrese el nombre del producto" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}" minlegth="2" maxlength="40" title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del producto: </label>
                        <textarea type="text" id="descripcion" name="descripcion" placeholder="Ingrese la descripción del producto" value="{{old('descripcion')}}" class="form-control" minlength="2" maxlength="80" title="Ingrese solamente Letras y Números. Tamaño mínimo: 2. Tamaño máximo: 80" required>{{ $producto->descripcion }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad del producto: </label>
                        <input type="number" name="cantidad" value="{{old('cantidad',$producto->cantidad)}}" class="form-control" min="1" max="1000000" min="1" max="1000000" required pattern="[0-9]" title="Ingrese solamente números. Tamaño mínimo: 1. Tamaño máximo: 1000000">
                    </div>
                    <div class="form-group">
                    <label for="marca_id">Marca del producto:</label>
                    <select id="marca_id" name="marca_id" class="form-control" required title="Por favor, seleccione la marca del producto.">
                        <option value="{{ $producto->marca->id }}">{{ $producto->marca->nombre }}</option>
                        @foreach ($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="categoria_producto_id">Categoría del producto:</label>
                    <select id="categoria_producto_id" name="categoria_producto_id" class="form-control" required title="Por favor, seleccione la categoría del producto.">
                        <option value="{{ $producto->categoriaProducto->id }}">{{ $producto->categoriaProducto->nombre }}</option>
                        @foreach ($categoriasProductos as $categoriaProducto)
                        <option value="{{ $categoriaProducto->id }}">{{ $categoriaProducto->nombre }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="tipo_producto_id">Tipo del producto:</label>
                    <select id="tipo_producto_id" name="tipo_producto_id" class="form-control" required title="Por favor, seleccione la categoría del producto.">
                        <option value="{{ $producto->tipoProducto->id }}">{{ $producto->tipoProducto->nombre }}</option>
                        @foreach ($tiposProductos as $tipoProducto)
                        <option value="{{ $tipoProducto->id }}">{{ $tipoProducto->nombre }}</option>
                        @endforeach
                    </select>
                    </div>
                    <button class="btn btn-info btn-block">Actualizar producto</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection