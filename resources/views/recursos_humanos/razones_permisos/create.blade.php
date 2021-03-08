<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.razones_permisos.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Razón de Permiso</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="duracion">Duración:</label>
          <input type="text" name="duracion" class="form-control" placeholder="Ejemplo 5 dias, 5 meses, 5 años" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s0-9]{1,10}"
          minlegth="1" maxlength="10"
          title="Solo se permiten letras y números. Tamaño mínimo: 1. Tamaño máximo: 10"
          value="{{old('duracion')}}">
        </div>
        <div class="form-group">
          <label for="descripcion">Ingrese una breve descripción:</label>
          <textarea name="descripcion" class="form-control" minlength="5" maxlength="100" title="Ingrese solamente letras y números. Tamaño mínimo: 5. Tamaño máximo: 100" required>
          {{old('descripcion')}}
          </textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Razón de Permiso</button>
        </div>
      </div>
    </div>

  </form>

</div>