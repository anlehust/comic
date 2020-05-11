<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
</head>
<body>
@foreach ($comics as $comic)
    <a href = '/comics/{{ $comic->name }}'>{{ $comic->name }}</a>
@endforeach
</body>
</html>