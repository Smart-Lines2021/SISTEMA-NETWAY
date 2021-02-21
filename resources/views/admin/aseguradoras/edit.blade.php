<div class="modal fade" aria-hidden="true" id="modal-edit-{{$aseguradora->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.aseguradoras.update',Crypt::encryptString($aseguradora->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Aseguradora</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de la aseguradora" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,80}"
          minlegth="2" maxlength="80"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 80"
          value="{{old('nombre',$aseguradora->nombre)}}">
        </div>
        <div class="form-group">
          <label for="observaciones">Observación:</label>
          <input type="text" name="observaciones" class="form-control" placeholder="Ingrese la observación de la aseguradora" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s,]{2,80}"
          minlegth="2" maxlength="80"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 80"
          value="{{old('observaciones',$aseguradora->observaciones)}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Aseguradora</button>
        </div>
      </div>
    </div>

  </form>

</div>