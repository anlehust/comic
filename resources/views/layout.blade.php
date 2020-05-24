<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comic </title>
</head>
<body>
<h1 id="welcome">Welcome to ComicOnline.com</h1>
@if(isset($username))
<button><a href="viewprofile" style="text-decoration: none; color: black;">View Profile</a></button>
<button><a href="logout" style="text-decoration: none; color: black;">Log out</a></button>

@endif

@yield('content')

</body>
</html>