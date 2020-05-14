@extends('layout')
@section('content')
@if(isset($fail))
		<div>{{ $fail }}</div>
    @endif
<form action="login" method="post">
    @csrf
    Username:  <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    <input type="submit" value="Log In">
    <button><a href="signup" style="text-decoration: none; color: black;">Sign Up</a></button>
    <button><a href="skip" style="text-decoration: none; color: black;">Skip</a></button>
</form>
@endsection
