<div class="tab-pane" id="verDocumentos">
  <form class="form-horizontal" action="{{route('documentos.documento.send')}}" method="POST">
    @csrf
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
                  <input type="checkbox" value="{{$documento->id}}"
                  name="documentos[]">
                 {{--  <a href="#" class="btn btn-sm bg-teal">
                    <i class="fas fa-comments"></i>
                  </a> --}}
                  @php
                  $url=asset($documento->url);
                  $url = str_replace('/', '\\', $url);
                  $url = str_replace('public', 'storage', $url);
                  @endphp
                  <a href="{{$url}}" class="btn btn-sm btn-primary" target="_blank">
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
                    <embed src="{{Storage::url($documento->url)}}" type="application/pdf" class="img-circle img-fluid"/>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <input type="checkbox" value="{{$documento->id}}"
                    name="documentos[]">
                    {{-- <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a> --}}
                    @php
                    $url=asset($documento->url);
                    $url = str_replace('/', '\\', $url);
                    $url = str_replace('public', 'storage', $url);
                    @endphp
                    <a href="{{$url}}" class="btn btn-sm btn-primary" target="_blank">
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

     </div>
     <div class="card-footer">
{{--     <nav aria-label="Contacts Page Navigation">
      {{$documentos->links()}}
    </nav> --}}
    <div class="text-right">
      <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="contactos" required>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select a State" style="width: 492.5px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
      <input type="submit" name="enviar" value="Enviar" class="btn btn-lg btn-secondary">
    </div>
  </div>
</form>

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