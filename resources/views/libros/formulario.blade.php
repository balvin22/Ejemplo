<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <h1>Crear Libro</h1>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo">

        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN">

        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial">

        <label for="paginas">Páginas:</label>
        <input type="number" name="paginas" id="paginas">

        <button type="submit">Crear</button>
    </form>

</body>
</html>
