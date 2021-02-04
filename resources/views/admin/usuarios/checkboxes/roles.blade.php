@foreach($roles as $id => $name) {{-- Asi por que es un array asociativo --}}
<div class="checkbox">
	<label>
		<input type="checkbox" value="{{$name}}" {{$usuario->roles->contains($id) ? 'checked' : ''}} name="roles[]"> {{-- Comprobamos que roles tiene el usuario a traves del id y seleccionamos --}}
		{{$name}}
	</label>
</div>
@endforeach