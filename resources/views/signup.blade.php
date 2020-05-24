@extends('layout')
@section('content')
<h1>SIGN UP</h1>
<form action="signup" method="post">
@csrf
    Username:  <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    Name: <input type="text" name ="fullname"><br>
    <input type="submit" value="Sign Up">
</form>
@endsection

