<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PREDENUNCIA</title>
</head>

<body>

    <h1>Documentos Recibidos</h1>
    <p>Documentos enviador por: {{$remitente->personasUsuarios->first()->persona->nombre.' '.$remitente->personasUsuarios->first()->persona->apellido}}</p>
    <p>El correo es enviado por el empleado de Netway con el correo {{$remitente->email}}</p>
    <p>Departamento: {{$remitente->personasUsuarios->first()->persona->informacionesLaborales->first()->departamento->nombre}}</p>
</body>

</html>