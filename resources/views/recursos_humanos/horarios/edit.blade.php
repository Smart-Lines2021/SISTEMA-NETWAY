<div class="modal fade" aria-hidden="true" id="modal-edit-{{$horario->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.horarios.update',Crypt::encryptString($horario->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Horario</h4>
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
          value="{{old('dias',$horario->dias)}}">
        </div>
        <div class="form-group">
          <label for="hora_entrada">Hora de entrada:</label>
          <input type="text" name="hora_entrada" class="form-control" placeholder="Ejemplo 9:00" required pattern="[0-9:]{4,5}"
          minlegth="4" maxlength="5"
          title="Solo se permiten horas. Tamaño mínimo: 4. Tamaño máximo: 5"
          value="{{old('hora_entrada',$horario->hora_entrada)}}">
        </div>
        <div class="form-group">
          <label for="hora_salida">Hora de salida:</label>
          <input type="text" name="hora_salida" class="form-control" placeholder="Ejemplo 15:00" required pattern="[0-9:]{4,5}"
          minlegth="4" maxlength="5"
          title="Solo se permiten horas. Tamaño mínimo: 4. Tamaño máximo: 5"
          value="{{old('hora_salida',$horario->hora_salida)}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Horario</button>
        </div>
      </div>
    </div>

  </form>

</div>