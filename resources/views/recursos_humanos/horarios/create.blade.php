<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.horarios.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Horario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="dias">Dias:</label>
          <input type="text" name="dias" class="form-control" placeholder="Ejemplo Lunes-Viernes" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s-]{1,25}"
          minlegth="1" maxlength="25"
          title="Solo se permiten letras y guion medio. Tamaño mínimo: 1. Tamaño máximo: 25"
          value="{{old('dias')}}">
        </div>
        <div class="form-group">
          <label for="horas">Horas:</label>
          <input type="text" name="horas" class="form-control" placeholder="Ejemplo 9:00-18:00" required pattern="[0-9-:]{1,20}"
          minlegth="1" maxlength="20"
          title="Solo se permiten letras y guion medio. Tamaño mínimo: 1. Tamaño máximo: 20"
          value="{{old('horas')}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Horario</button>
        </div>
      </div>
    </div>

  </form>

</div>