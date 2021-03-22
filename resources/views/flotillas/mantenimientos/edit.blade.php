<div class="modal fade" aria-hidden="true" id="modal-edit-2-{{$servicio->id}}" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('rh.servicios_vehiculos.update',Crypt::encryptString($servicio->id))}}">
    @method('PUT')
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Editar Servicio</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       <input type="hidden" name="vehiculo_id" value="{{Crypt::encryptString($vehiculo->id)}}">

                     <div class="form-group">
                        <label for="kilometraje">Kilometraje:</label>
                        <input type="text" name="kilometraje" value="{{old('kilometraje',$servicio->kilometraje)}}" class="form-control"
                        placeholder="Ingrese el kilometraje del vehículo" required pattern="[1-9]{1,8}"
                        minlegth="1" maxlength="8"
                        title="Solo se permiten numeros. Tamaño mínimo: 1. Tamaño máximo: 8">
                    </div>

                    <div class="form-group">
                        <label for="tipo_servicio_id">Tipo de Servicio:</label>
                        <select id="tipo_servicio_id" name="tipo_servicio_id" class="form-control select2" required
                        title="Por favor, seleccione el tipo de servicio.">
                        <option {{ old('tipo_servicio_id') == $servicio->tipo_servicio_id ? "selected" : "" }} value="{{$servicio->tipo_servicio_id}}"> {{$servicio->tipoServicio->nombre}}</option>
                        @foreach ($tiposServicios as $tipoServicio)
                        <option value="{{ $tipoServicio->id }}"
                            {{ old('tipo_servicio_id') == $tipoServicio->id ? 'selected' : '' }}>
                            {{ $tipoServicio->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="taller_id">Taller:</label>
                        <select id="taller_id" name="taller_id" class="form-control select2" required
                        title="Por favor, seleccione el taller.">
                        <option {{ old('taller_id') == $servicio->taller_id ? "selected" : "" }} value="{{$servicio->taller_id}}"> {{$servicio->taller->nombre}}</option>
                        @foreach ($talleres as $taller)
                        <option value="{{ $taller->id }}"
                            {{ old('taller_id') == $taller->id ? 'selected' : '' }}>
                            {{ $taller->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select class="form-control select2" id="estado"
                        data-placeholder="Seleccione una opción" name="estado" required>
                          <option {{ old('estado') == $servicio->estado ? "selected" : "" }} value="{{$servicio->estado}}"> {{$servicio->estado}}</option>
                        <option {{ old('estado')}}  value="Programado">Programado</option>
                        <option {{ old('estado')}}  value="Realizado">Realizado</option>
                        <option {{ old('estado')}}  value="Suspendido">Suspendido</option>
                        <option {{ old('estado')}}  value="Cancelado">Cancelado</option>
                    </select>
                </div>

                <div class="form-group">
                        <label for="tipo_mantenimiento">Tipo de mantenimiento:</label>
                        <select class="form-control select2" id="tipo_mantenimiento"
                        data-placeholder="Seleccione una opción" name="tipo_mantenimiento" required>
                        <option {{ old('tipo_mantenimiento') == $servicio->tipo_mantenimiento ? "selected" : "" }} value="{{$servicio->tipo_mantenimiento}}"> {{$servicio->tipo_mantenimiento}}</option>
                        <option {{ old('tipo_mantenimiento')}}  value="Programado">Programado</option>
                        <option {{ old('tipo_mantenimiento')}}  value="Imprevisto">Imprevisto</option>
                    </select>
                </div>
                 <div class="form-group">
                    <label for="observaciones">Observaciones:</label>
                    <textarea class="form-control">
                        {{old('observaciones',$servicio->observaciones)}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha programada:</label>
                    <input value="{{old('fecha',$servicio->fecha)}}" type="date" name="fecha"
                    class="form-control" required>
                </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Editar Servicio</button>
        </div>
      </div>
    </div>
</div>
  </form>

</div>