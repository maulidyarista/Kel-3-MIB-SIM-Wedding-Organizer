
@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <h2>{{ $post["title"] }}</h2>
    <img src="img/{{ $post["image"] }}" alt="dress" width="200">
@endforeach

 @endsection