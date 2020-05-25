<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
    <link rel="stylesheet" href="{{ asset('css/image.css') }}">
</head>
<body>
@foreach ($images as $image)
 <img src='data:image/jpg;base64,{{$image->source}}' /><br>
@endforeach
</body>
</html>