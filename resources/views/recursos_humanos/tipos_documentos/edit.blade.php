<div class="modal fade" aria-hidden="true" id="modal-edit-{{$tipoDocumento->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.tipos_documentos.update',Crypt::encryptString($tipoDocumento->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Tipo de Documento</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del Tipo de Documento" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,30}"
          minlegth="2" maxlength="30"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 30"
          value="{{old('nombre',$tipoDocumento->nombre)}}">
        </div>
        <div class="form-group">
          <label for="descripcion">Descripción:</label>
          <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripción del Tipo de Documento" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,50}"
          minlegth="2" maxlength="50"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 50"
          value="{{old('descripcion',$tipoDocumento->descripcion)}}">
        </div>
        <div class="form-group">
          <label for="carpeta">Carpeta:</label>
          <input type="text" name="carpeta" class="form-control" placeholder="Ingrese el nombre de la carpeta del Tipo de Documento" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,40}"
          minlegth="2" maxlength="40"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 40"
          value="{{old('carpeta',$tipoDocumento->carpeta)}}">
        </div>
        <div class="form-group">
          <label for="formato">Formato:</label>
          <input type="text" name="formato" class="form-control" placeholder="Ingrese el formato del Tipo de Documento" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,5}"
          minlegth="2" maxlength="5"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 5"
          value="{{old('formato',$tipoDocumento->formato)}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Tipo de Documento</button>
        </div>
      </div>
    </div>

  </form>

</div>