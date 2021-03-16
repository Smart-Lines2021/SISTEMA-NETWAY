@extends('admin.layout.layout')
@section('title')
<h1 class="m-0 text-dark">Crear Firma</h1>
@endsection
@section('content-header')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    <li class="breadcrumb-item active">Administración</li>
</ol>
@stop
@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Firma </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form action="">

                    <div class="wrapper">
                        <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                    </div>

                    <button id="save-png">Save as PNG</button>
                    <button id="save-jpeg">Save as JPEG</button>
                    <button id="save-svg">Save as SVG</button>
                    <button id="undo">Undo</button>
                    <button id="clear">Clear</button>


                </form>

            </div>

        </div>
    </div>
</div>
@endsection

@push('styles')
{{-- Incluimos css de select2 --}}
<link rel="stylesheet" href="{{asset('estilos_personalizados/firmas/firma.css')}}">

@endpush
@push('scripts')

<script src="{{asset('estilos_personalizados/firmas/firma.js')}}"></script>
@endpush