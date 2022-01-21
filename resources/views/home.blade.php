@extends('layouts.main')

@section('head-title', 'Home | Cinema')

@section('main-content')
<div class="dark-bg-1">
    <div class="container d-flex f-dir-column">
        <div class="cards d-flex f-wrap space-between align-items-center">
            <h1>ciao {{ $name }}</h1>
        </div>
        <a class="btn" href="/">LOAD MORE</a>
    </div>
</div>

@endsection