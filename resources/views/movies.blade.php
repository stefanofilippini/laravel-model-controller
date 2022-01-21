@extends('layouts.main')

@section('head-title', 'Movies | Cinema')

@section('main-content')
    <h1>
        Movies
    </h1>

    @foreach ($movies as $movie)
        <h3>{{ $movie->title }}</h3>
    @endforeach
@endsection