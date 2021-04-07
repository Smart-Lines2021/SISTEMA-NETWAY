<div class="tab-pane" id="verDocumentos">
<form class="form-horizontal">
<div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row">
      @if($documentos !== null)
      @forelse($documentos as $documento)
      {{-- Revisamos la cadena en la posicion para saber si es pdf --}}
      @php
      $extension=explode('.',$documento->url);
      @endphp
      @if($extension[1] !== 'pdf')
      <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            {{$documento->tipoDocumento->nombre}}
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>{{$documento->tipoDocumento->nombre}}</b></h2>
                <p class="text-muted text-sm"><b>Subido el: </b> {{$documento->created_at->format('d-M-Y')}} </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Tipo de Archivo: Imagen</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Autor: {{$documento->persona->nombre.' '.$documento->persona->apellido}}</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                <img  src="{{Storage::url($documento->url)}}" alt="{{$documento->tipoDocumento->nombre}}" class="img-circle img-fluid">
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="#" class="btn btn-sm bg-teal">
                <i class="fas fa-comments"></i>
              </a>
              <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-user"></i> Ver Documento
              </a>
            </div>
          </div>
        </div>
      </div>
      @else
        <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch flex-column">
        <div class="card bg-light d-flex flex-fill">
          <div class="card-header text-muted border-bottom-0">
            {{$documento->tipoDocumento->nombre}} Soy un pdf
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col-7">
                <h2 class="lead"><b>{{$documento->tipoDocumento->nombre}}</b></h2>
                <p class="text-muted text-sm"><b>Subido el: </b> {{$documento->created_at->format('d-M-Y')}} </p>
                <ul class="ml-4 mb-0 fa-ul text-muted">
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Tipo de Archivo: PDF</li>
                  <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Autor: {{$documento->persona->nombre.' '.$documento->persona->apellido}}</li>
                </ul>
              </div>
              <div class="col-5 text-center">
                {{-- <img  src="{{Storage::url($documento->url)}}" alt="{{$documento->tipoDocumento->nombre}}" class="img-circle img-fluid"> --}}
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-right">
              <a href="#" class="btn btn-sm bg-teal">
                <i class="fas fa-comments"></i>
              </a>
              <a href="#" class="btn btn-sm btn-primary">
                <i class="fas fa-user"></i> Ver Documento
              </a>
            </div>
          </div>
        </div>
      </div>
       @endif
      @empty
      <div class="form-group row">
       <label for="inputName" class="col-sm-2 col-form-label">:C</label>
       <div class="col-sm-10">
         <p>Lo sentimos no has cargado ningun documento</p>
       </div>
     </div>
      @endforelse
      @else
      <div class="form-group row">
       <label for="inputName" class="col-sm-2 col-form-label">:C</label>
       <div class="col-sm-10">
         <p>Lo sentimos no has cargado ningun documento</p>
       </div>
     </div>
     @endif
   </div>
 </div>
</form>
</div>
<div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
          {{$documentos->links()}}{{--  Paginación --}}
          </nav>
        </div>