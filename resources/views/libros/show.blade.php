<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $libro->titulo }}</h1>
    <p>ISBN: {{ $libro->ISBN }}</p>
    <p>Editorial: {{ $libro->editorial }}</p>
    <p>Páginas: {{ $libro->paginas }}</p>

</body>
</html>

