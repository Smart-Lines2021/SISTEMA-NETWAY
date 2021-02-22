<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.bancos.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Banco</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del Banco" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,20}"
          minlegth="2" maxlength="20"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 20"
          value="{{old('nombre')}}">
        </div>

    <div class="form-group">
      <label for="estado_id">Observaciones:</label>
          <input type="text" name="observaciones" class="form-control" placeholder="Ingrese las observaciones del banco" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,20}"
          minlegth="2" maxlength="20"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 20"
          value="{{old('observaciones')}}">
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Banco</button>
        </div>
      </div>
    </div>

  </form>

</div>