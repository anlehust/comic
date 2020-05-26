<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
    <link rel="stylesheet" href="{{ asset('css/image.css') }}">
</head>
<body>
    <table>
@foreach ($images as $image)<tr>
 <td><img src='data:image/jpg;base64,{{$image->source}}' /></td>
</tr>
@endforeach
<table>
</body>
</html>