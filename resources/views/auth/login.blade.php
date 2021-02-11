<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('estilos_personalizados/login.css')}}">
    <link rel="stylesheet" media="(max-width: 800px)"  />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--
	@include('auth.diseño') --}}
</head>
<body>
	<div class="container">
		<section id="content">
			<form method="POST" action="{{route('login')}}">
				@csrf
				<img src="{{asset('images/logo.png')}}"  width="90" height="90" align="">
				<h1 align="center">Iniciar sesión</h1>
				<div>
					<input type="text" placeholder="Usuario" id="username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong> {{ __('Las credenciales no coinciden con nuestros registros') }}</strong>
					</span>
					@enderror
				</div>
				<div>
					<input type="password" placeholder="Contraseña" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong> {{ __('La contraseña es incorrecta') }}</strong>
					</span>
					@enderror
				</div>
				<div>
					<input  type="submit" value="Ingresar" />
				</div>
			</form><!-- form -->
		</section><!-- content -->
	</div><!-- container -->

</body>
</html>
