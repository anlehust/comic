<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
</head>
<body>
@foreach ($chaps as $chap)
    <a href = '{{$chap->name}}/chaps/{{$chap->name_of_chap}}'>{{ $chap->name_of_chap }}</a>
@endforeach
</body>
</html>