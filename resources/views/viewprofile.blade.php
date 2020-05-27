@extends('layout')
@section('content')
    @if(isset($data))
        Name: {{$data->name}}</br>
       Hạng: </br>
       Chap mới đọc: {{$data->recent_chap}}</br>
    @endif
@endsection