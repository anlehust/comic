@extends('layout')
@section('content')
@foreach ($comics as $comic)
    <a href = '/comics/{{ $comic->name }}'>{{ $comic->name }}</a>
@endforeach
@endsection