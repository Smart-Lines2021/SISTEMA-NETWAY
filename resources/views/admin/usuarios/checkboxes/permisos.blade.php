<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Control de Usuarios</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosControlUsuarios as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Control de Usuarios --}}
<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Recursos Humanos</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosRecursosHumanos as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Recursos Humanos --}}
<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Ubicación Geográfica</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosUbicacionesGeograficas as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Ubicación Geografica --}}
<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Productos</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosProductos as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Ubicación Geografica --}}
<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Proveedores y Vehiculos</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosProveedoresVehiculos as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Ubicación Geografica --}}
<div class="card collapsed-card"> {{-- Empieza la tarjeta colapsada --}}
	<div class="card-header">
		<h3 class="card-title">Gastos e Información Bancaria</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				<i class="fas fa-plus" style="color:red"></i>
			</button>
		</div>
	</div>
	<div class="card-body" style="display: none;">
		<div class="row">
			@foreach($permisosGastos as $id => $name) {{-- Asi por que es un array asociativo --}}
			<div class="col-md-6">
				<div class="checkbox">
					<label>
						<input type="checkbox" value="{{$name}}"
						{{collect(old('permissions'))->contains($name) ? 'checked' : ''}}
						{{$model->permissions->contains($id) ? 'checked' : ''}}
						name="permissions[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos model es la variable que pasamos --}}
						{{$name}}
					</label>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div> {{-- Gastos--}}



