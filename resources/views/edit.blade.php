<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Profesor</title>
</head>
<body>
    <h1>Editar Profesor</h1>

    <form action="{{ route('profesores.update', $teacher->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Nombre:
            <input type="text" name="nombre" value="{{ $teacher->nombre }}">
        </label>
        <br>
        <label>
            Cédula:
            <input type="text" name="cedula" value="{{ $teacher->cedula }}">
        </label>
        <br>
        <label>
            Dirección:
            <input type="text" name="direccion" value="{{ $teacher->direccion }}">
        </label>
        <br>
        <label>
            Teléfono:
            <input type="text" name="telefono" value="{{ $teacher->telefono }}">
        </label>
        <br>

        <button type="submit">Actualizar</button>
    </form>

    <a href="{{ route('profesores.index') }}">Volver al listado</a>
</body>
</html>
