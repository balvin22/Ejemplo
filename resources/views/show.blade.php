<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del Profesor</title>
</head>
<body>
    <h1>Detalle del Profesor</h1>

    <p>ID: {{ $teacher->id }}</p>
    <p>Nombre: {{ $teacher->nombre }}</p>
    <p>Cédula: {{ $teacher->cedula }}</p>
    <p>Dirección: {{ $teacher->direccion }}</p>
    <p>Teléfono: {{ $teacher->telefono }}</p>

    <a href="{{ route('profesores.index') }}">Volver al listado</a>
</body>
</html>
