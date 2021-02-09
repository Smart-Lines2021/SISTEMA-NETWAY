<div class="modal fade" aria-hidden="true" id="modal-create" tabindex="-1" role="dialog" tabindex="-1"
  aria-hidden="true">
  <form method="POST" action="{{route('admin.estados.store')}}">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       <div class="modal-header">
        <h4 class="modal-title">Crear Estado</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del estado" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]{2,20}"
          minlegth="2" maxlength="20"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 20"
          value="{{old('nombre')}}">
        </div>
        <div class="row">
          <div class="col-6">
        <div class="form-group">
          <label for="variable">Variable:</label>
          <input type="text" name="variable" class="form-control" placeholder="Ingrese la variable del estado" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s.]{3,8}"
          minlegth="3" maxlength="8"
          title="Solo se permiten letras. Tamaño mínimo: 3. Tamaño máximo: 8"
          value="{{old('variable')}}">
        </div>
        </div>
        <div class="col-6">
        <div class="form-group">
          <label for="renapo">RENAPO:</label>
          <input type="text" name="renapo" class="form-control" placeholder="Ingrese el RENAPO del estado" required pattern="[A-Z]{2,2}"
          minlegth="2" maxlength="2"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 2"
          value="{{old('renapo')}}">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="clave_curp">Clave de la CURP:</label>
          <input type="text" name="clave_curp" class="form-control" placeholder="Ingrese la clave de la CURP del estado" required pattern="[A-Z]{2,3}"
          minlegth="2" maxlength="3"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 3"
          value="{{old('clave_curp')}}">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="tres_digitos">Tres digitos:</label>
          <input type="text" name="tres_digitos" class="form-control" placeholder="Ingrese tres digitos del estado" required pattern="[A-Z]{2,3}"
          minlegth="2" maxlength="3"
          title="Solo se permiten letras. Tamaño mínimo: 2. Tamaño máximo: 3"
          value="{{old('tres_digitos')}}">
        </div>
      </div>
    </div> {{-- cierra el row --}}
    <div class="form-group">
      <label for="pais_id">Pais:</label>
          <select name="pais_id" class="form-control" required="">
           @foreach($paises as $pais)
            <option {{ old('pais_id') == $pais->id ? "selected" : "" }} value="{{$pais->id}}"> {{$pais->nombre}}</option>
          @endforeach
          </select>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Crear Estado</button>
        </div>
      </div>
    </div>

  </form>

</div>