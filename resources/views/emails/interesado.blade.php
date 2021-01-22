<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>¡Hola!</h1>
    <h3>A alguien le interesa tu articulo, por favor ponte en contacto con el</h3>
    <h3>Articulo: </h3>
    {{$contacto->title}} 

    <h3>Interesado: </h3>
    <h4>Nombre: {{$interesado->name}}</h4>
    <h4>Correo: {{$interesado->email}}</h4>
    <h4>Nombre: {{$interesado->phone}}</h4>
</body>
</html>