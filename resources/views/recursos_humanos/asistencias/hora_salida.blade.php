<div class="modal fade " aria-hidden="true" id="modal-hora-salida-{{$asistencia->id}}" tabindex="-1" role="dialog" tabindex="-1"
    aria-hidden="true">
    <form method="POST" action="{{ route('rh.asistencias.hora_salida',Crypt::encryptString($asistencia->id)) }}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Hora de Salida</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body theme_color">
                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                    <div class="form-group">
                        <label for="estado">Estado del empleado:</label>
                        <select class="form-control select2" id="estados"
                        data-placeholder="Seleccione una opción" style="width: 100%;" name="estado" required>
                        <option {{ old('estado') == $asistencia->estado ? "selected" : "" }} value="{{$asistencia->estado}}"> {{$asistencia->estado}}</option>
                        <option {{ old('estado')}}  value="Presente">Presente</option>
                        <option {{ old('estado')}}  value="Ausente">Ausente</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary">Ingresar Salida del Empleado</button>
        </div>
    </div>
</div>
</form>
</div>
