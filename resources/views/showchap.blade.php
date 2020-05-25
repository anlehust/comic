@extends('layout')
@section('content')
@if(!isset($username))
<button><a href="login" style="text-decoration: none; color: black;">Log In</a></button>
<button><a href="signup" style="text-decoration: none; color: black;">Sign Up</a></button>
@endif
<br>
@foreach ($chaps as $chap)
    <a class = "chap" href = '{{$chap->name}}/chaps/{{$chap->name_of_chap}}'>{{ $chap->name_of_chap }}</a>
@endforeach
@endsection