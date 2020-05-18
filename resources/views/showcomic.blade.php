@extends('layout')
@section('content')
<p>{{$username ?? ''}}</p>
<p>{{$messenger ?? ''}}</p>
@if(!isset($username))
<button><a href="login" style="text-decoration: none; color: black;">Log In</a></button>
<button><a href="signup" style="text-decoration: none; color: black;">Sign Up</a></button>
@endif
<br>
@foreach ($comics as $comic)
    <a href = '/comics/{{ $comic->name }}'>{{ $comic->name }}</a>
@endforeach
<br>
{{$comics->onEachSide(3)->links()}}
<!-- <button><a href={{$comics->previousPageUrl()}} style="text-decoration: none; color: black;">Previous Page</a></button>
<button><a href={{$comics->nextPageUrl()}} style="text-decoration: none; color: black;">Next Page</a></button> -->
@endsection