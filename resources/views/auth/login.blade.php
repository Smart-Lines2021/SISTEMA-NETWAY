<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('auth.diseño')
</head>
<body>
<div class="container">
    <section id="content">
       <form method="POST" action="{{route('login')}}">
       	 @csrf
            <img src="images/logo.png"  width="90" height="90" align="">
            <h1 align="center">Iniciar sesión</h1>
            <div>
                <input type="text" placeholder="Usuario" required="" id="username" name="email" />
            </div>
            <div>
                <input type="password" placeholder="Contraseña" required="" id="password" name="password" />
            </div>
            <div>
                <input  type="submit" value="Ingresar" />
                        </div>
        </form><!-- form -->
    </section><!-- content -->
</div><!-- container -->

</body>
</html>
