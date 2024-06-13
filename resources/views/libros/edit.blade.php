<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $libro->titulo }}">

        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN" value="{{ $libro->ISBN }}">

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}">

        <label for="paginas">Páginas:</label>
        <input type="number" name="paginas" id="paginas" value="{{ $libro->paginas }}">

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
