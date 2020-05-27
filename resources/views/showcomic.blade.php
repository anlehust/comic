@extends('layout')
@section('content')
 <p>Welcome {{$data->name ?? ''}}</p>
<p>{{$messenger ?? ''}}</p>
@if(!isset($username))
<button><a href="login" style="text-decoration: none; color: black;">Log In</a></button>
<button><a href="signup" style="text-decoration: none; color: black;">Sign Up</a></button>
<a href = "">Most Recent Chap</a>
@endif
<button><a href="newchap" style="text-decoration: none; color: black;">New Chap</a></button>

<br>
<table>
<tr>
<th class = "comic name"> Name </th>
<th class = "comic newchap"> New Chap </th>
<th class = "comic date"> Date </th>
</tr>
@foreach ($comics as $comic)<tr>
    <td class = "comic name"><a  href = '/comics/{{ $comic->name }}'>{{ $comic->name }}</a></td>
    <td class = "comic newchap">{{$comic->new_chap}}</td>
    <td class = "comic date">{{$comic->date}}</td>
    </tr>
@endforeach
<table>
<br>
{{$comics->onEachSide(3)->links()}}
<!-- <button><a href={{$comics->previousPageUrl()}} style="text-decoration: none; color: black;">Previous Page</a></button>
<button><a href={{$comics->nextPageUrl()}} style="text-decoration: none; color: black;">Next Page</a></button> -->
@endsection