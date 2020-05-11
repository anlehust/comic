<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
</head>
<body>
@foreach ($images as $image)
 <img src='data:image/jpg;base64,{{$image->source}}' />
@endforeach
</body>
</html>