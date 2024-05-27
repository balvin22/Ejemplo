<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Profesores</title>
</head>
<body>
    <h1>Listado de Profesores</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->nombre }}</td>
                <td>{{ $teacher->cedula }}</td>
                <td>{{ $teacher->direccion }}</td>
                <td>{{ $teacher->telefono }}</td>
                <td>
                    <a href="{{ route('profesores.show', $teacher->id) }}">Ver</a>
                    <a href="{{ route('profesores.edit', $teacher->id) }}">Editar</a>
                    <form action="{{ route('profesores.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
