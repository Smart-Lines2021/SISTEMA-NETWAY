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
        <label for="dia_inicio">Dia Inicial:</label>
        <select class="form-control select2" id="dia_inicios"
        data-placeholder="Seleccione una opción" style="width: 100%;" name="dia_inicio" required>
         <option {{ old('dia_inicio') == $horario->dia_inicio ? "selected" : "" }} value="{{$horario->dia_inicio}}"> {{$horario->dia_inicio}}</option>
        <option {{ old('dia_inicio')}}  value="Lunes">Lunes</option>
        <option {{ old('dia_inicio')}}  value="Martes">Martes</option>
        <option {{ old('dia_inicio')}}  value="Miercoles">Miercoles</option>
        <option {{ old('dia_inicio')}}  value="Jueves">Jueves</option>
        <option {{ old('dia_inicio')}}  value="Viernes">Viernes</option>
        <option {{ old('dia_inicio')}}  value="Sabado">Sabado</option>
        <option {{ old('dia_inicio')}}  value="Domingo">Domingo</option>
      </select>
    </div>
    <div class="form-group">
      <label for="dia_final">Dia Final:</label>
      <select class="form-control select2" id="dia_finals"
      data-placeholder="Seleccione una opción" style="width: 100%;" name="dia_final" required>
       <option {{ old('dia_final') == $horario->dia_final ? "selected" : "" }} value="{{$horario->dia_final}}"> {{$horario->dia_final}}</option>
      <option {{ old('dia_final')}}  value="Lunes">Lunes</option>
      <option {{ old('dia_final')}}  value="Martes">Martes</option>
      <option {{ old('dia_final')}}  value="Miercoles">Miercoles</option>
      <option {{ old('dia_final')}}  value="Jueves">Jueves</option>
      <option {{ old('dia_final')}}  value="Viernes">Viernes</option>
      <option {{ old('dia_final')}}  value="Sabado">Sabado</option>
      <option {{ old('dia_final')}}  value="Domingo">Domingo</option>
    </select>
  </div>
  <div class="form-group">
    <label for="hora_entrada">Hora de Entrada:</label>
    <select class="form-control select2" id="hora_entradas"
    data-placeholder="Seleccione una opción" style="width: 100%;" name="hora_entrada" required>
     <option {{ old('hora_entrada') == $horario->hora_entrada ? "selected" : "" }} value="{{$horario->hora_entrada}}"> {{$horario->hora_entrada}}</option>
    <option {{ old('hora_entrada')}}  value="00:00">00:00 am</option>
    <option {{ old('hora_entrada')}}  value="01:00">01:00 am</option>
    <option {{ old('hora_entrada')}}  value="02:00">02:00 am</option>
    <option {{ old('hora_entrada')}}  value="03:00">03:00 am</option>
    <option {{ old('hora_entrada')}}  value="04:00">04:00 am</option>
    <option {{ old('hora_entrada')}}  value="05:00">05:00 am</option>
    <option {{ old('hora_entrada')}}  value="06:00">06:00 am</option>
    <option {{ old('hora_entrada')}}  value="07:00">07:00 am</option>
    <option {{ old('hora_entrada')}}  value="08:00">08:00 am</option>
    <option {{ old('hora_entrada')}}  value="09:00">09:00 am</option>
    <option {{ old('hora_entrada')}}  value="10:00">10:00 am</option>
    <option {{ old('hora_entrada')}}  value="11:00">11:00 am</option>
    <option {{ old('hora_entrada')}}  value="12:00">12:00 pm</option>
    <option {{ old('hora_entrada')}}  value="13:00">13:00 pm</option>
    <option {{ old('hora_entrada')}}  value="14:00">14:00 pm</option>
    <option {{ old('hora_entrada')}}  value="15:00">15:00 pm</option>
    <option {{ old('hora_entrada')}}  value="16:00">16:00 pm</option>
    <option {{ old('hora_entrada')}}  value="17:00">17:00 pm</option>
    <option {{ old('hora_entrada')}}  value="18:00">18:00 pm</option>
    <option {{ old('hora_entrada')}}  value="19:00">19:00 pm</option>
    <option {{ old('hora_entrada')}}  value="20:00">20:00 pm</option>
    <option {{ old('hora_entrada')}}  value="21:00">21:00 pm</option>
    <option {{ old('hora_entrada')}}  value="22:00">22:00 pm</option>
    <option {{ old('hora_entrada')}}  value="23:00">23:00 pm</option>
    <option {{ old('hora_entrada')}}  value="24:00">24:00 pm</option>
  </select>
</div>
<div class="form-group">
  <label for="hora_salida">Hora de Entrada:</label>
  <select class="form-control select2" id="hora_salidas"
  data-placeholder="Seleccione una opción" style="width: 100%;" name="hora_salida" required>
   <option {{ old('hora_salida') == $horario->hora_salida ? "selected" : "" }} value="{{$horario->hora_salida}}"> {{$horario->hora_salida}}</option>
  <option {{ old('hora_salida')}}  value="00:00">00:00 am</option>
  <option {{ old('hora_salida')}}  value="01:00">01:00 am</option>
  <option {{ old('hora_salida')}}  value="02:00">02:00 am</option>
  <option {{ old('hora_salida')}}  value="03:00">03:00 am</option>
  <option {{ old('hora_salida')}}  value="04:00">04:00 am</option>
  <option {{ old('hora_salida')}}  value="05:00">05:00 am</option>
  <option {{ old('hora_salida')}}  value="06:00">06:00 am</option>
  <option {{ old('hora_salida')}}  value="07:00">07:00 am</option>
  <option {{ old('hora_salida')}}  value="08:00">08:00 am</option>
  <option {{ old('hora_salida')}}  value="09:00">09:00 am</option>
  <option {{ old('hora_salida')}}  value="10:00">10:00 am</option>
  <option {{ old('hora_salida')}}  value="11:00">11:00 am</option>
  <option {{ old('hora_salida')}}  value="12:00">12:00 pm</option>
  <option {{ old('hora_salida')}}  value="13:00">13:00 pm</option>
  <option {{ old('hora_salida')}}  value="14:00">14:00 pm</option>
  <option {{ old('hora_salida')}}  value="15:00">15:00 pm</option>
  <option {{ old('hora_salida')}}  value="16:00">16:00 pm</option>
  <option {{ old('hora_salida')}}  value="17:00">17:00 pm</option>
  <option {{ old('hora_salida')}}  value="18:00">18:00 pm</option>
  <option {{ old('hora_salida')}}  value="19:00">19:00 pm</option>
  <option {{ old('hora_salida')}}  value="20:00">20:00 pm</option>
  <option {{ old('hora_salida')}}  value="21:00">21:00 pm</option>
  <option {{ old('hora_salida')}}  value="22:00">22:00 pm</option>
  <option {{ old('hora_salida')}}  value="23:00">23:00 pm</option>
  <option {{ old('hora_salida')}}  value="24:00">24:00 pm</option>
</select>
</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Horario</button>
        </div>
      </div>
    </div>

  </form>

</div>