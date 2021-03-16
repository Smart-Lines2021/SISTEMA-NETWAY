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

                 

                        <div class="row" width="10002px" height="40090px" >
                            <div class="col-md-12">
                                <canvas id="draw-canvas">
                                    No tienes un buen navegador.
                                </canvas>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <input type="button" class="button" id="draw-submitBtn" value="Crear "/>
                                <input type="button" class="button" id="draw-clearBtn" value="Borrar "/>

                               


                            </div>

                        </div>

        
                        <div style="display:none;">
                         
                                <textarea id="draw-dataUrl" class="form-control"
                                    rows="5">Para los que saben que es esto:</textarea>
                  
                        </div>
                     
                  
                        
                                <img id="draw-image" src=""  />
                          
                  
                

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