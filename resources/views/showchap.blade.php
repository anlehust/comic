@extends('show')
@section('content')
@foreach ($chaps as $chap)
    <a href = '{{$chap->name}}/chaps/{{$chap->name_of_chap}}'>{{ $chap->name_of_chap }}</a>
@endforeach
@endsection