@extends('layout')
@section('content')
<form action="login" method="post">
    @csrf
    Username:  <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" value="Log In">
    <button><a href="signup" style="text-decoration: none; color: black;">Sign Up</a></button>
</form>
@endsection
