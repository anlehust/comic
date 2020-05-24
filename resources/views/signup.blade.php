@extends('layout')
@section('content')
@if(isset($message))
		<div>{{ $message }}</div>
    @endif
<h1>SIGN UP</h1>
<form action="signup" method="post">
<<<<<<< HEAD
@csrf
=======
    @csrf
>>>>>>> 6a9237b3dd55765c7195875c260eab9979f4a491
    Username:  <input type="text" name="username"><br>
    Password:<input type="password" name="password"><br>
    Name: <input type="text" name ="fullname"><br>
    <input type="submit" value="Sign Up">
</form>
@endsection

