<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>HTML 5 Geolocalizacion</title>
</head>
<body>
	<h1>Mapa estatico</h1>
	<div id="mapa">
		{{-- <input type="text" id="latitud" name=""> --}}
		<br>

	</div>
	<div id="mapaImagen">
		{{-- <input type="text" id="latitud" name=""> --}}
		<br>

	</div>

	<script type="text/javascript">
		navigator.geolocation.getCurrentPosition(fn_ok, fn_error);
		var divMapa=document.getElementById('mapa');
		var divMapaImagen=document.getElementById('mapaImagen');
		function fn_error(){
			divMapa.innerHTML="Error al obtener la ubicación";
		}
		function fn_ok(respuesta){
			var lat = respuesta.coords.latitude;
			var lon = respuesta.coords.longitude;
			//Juntamos las coordenadas
			var coordenada = lat+', '+lon;

			//Nos traemos la imagen estatica de las apis de google, pero le pasamos por get los parametros
			/*divMapaImagen.innerHTML='<img src="http://maps.googleapis.com/maps/api/staticmap?size=700x400&markers='+coordenada+'key=AIzaSyBvu4O6dRihNciF-scvcQOD19kzv1bxyG0">';*/
			/*divMapaImagen.innerHTML='<img src="https://maps.googleapis.com/maps/api/staticmap?size=700x400&markers='+coordenada+';key=AIzaSyBvu4O6dRihNciF-scvcQOD19kzv1bxyG0">';*/
			divMapaImagen.innerHTML='<img src="https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyBvu4O6dRihNciF-scvcQOD19kzv1bxyG0&size=700x400&markers='+coordenada+'">';
			divMapa.innerHTML=lat+', ' + lon;
		}

		function mostrar_objeto(obj){
			for(var prop in obj){
				document.write(prop+': '+obj[prop] + '<br>');
			}
		}
	</script>

</body>
</html>