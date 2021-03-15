<div class="modal fade " aria-hidden="true" id="modal-create-1-{{$vehiculo->id}}" tabindex="-1" role="dialog"
        tabindex="-1" aria-hidden="true">
        <form method="POST" action="{{route('store.poliza.vista.detalle')}}">
            @csrf
    
          
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Crear Póliza</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
    
                        <input type="hidden" name="vehiculo_id" value="{{Crypt::encryptString($vehiculo->id)}}">
    
                        <div class="form-group">
                            <label for="no_serie">Póliza de seguro::</label>
                            <input type="text" name="poliza" value="{{old('poliza')}}" class="form-control"
                                placeholder="Ingrese el número de poliza del vehículo" required pattern="[A-Z 1-9]+"
                                minlegth="1" maxlength="30"
                                title="Solo se permiten numeros y letras. Tamaño mínimo: 1. Tamaño máximo: 30">
                        </div>
    
    
                        <div class="form-group">
                            <label for="aseguradora_id">Aseguradora:</label>
                            <select id="aseguradora_id" name="aseguradora_id" class="form-control select2" required
                                title="Por favor, seleccione aseguradora.">
                                <option value="">Seleccione aseguradora</option>
                                @foreach ($aseguradoras as $aseguradora)
                                <option value="{{ $aseguradora->id }}"
                                    {{ old('aseguradora_id') == $aseguradora->id ? 'selected' : '' }}>
                                    {{ $aseguradora->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        
                        <div class="form-group">
                            <label for="vigencia_poliza">Fecha de inicio de póliza::</label>
                            <input value="{{old('inicio_poliza')}}" type="date" name="inicio_poliza" class="form-control"
                                required>
                        </div>
    
                        <div class="form-group">
                            <label for="vigencia_poliza">Fecha de vigencia de póliza::</label>
                            <input value="{{old('vigencia_poliza')}}" type="date" name="vigencia_poliza"
                                class="form-control" required>
                        </div>
    
    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary">Crear Aseguradora</button>
                        </div>
                    </div>
                </div>
    
        </form>
    </div>