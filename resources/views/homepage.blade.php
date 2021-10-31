@extends('layout.app')

@section('content')
    @foreach ($movie as $item)
        <a href="#">
            <div class="movie-card">
                <h1>{{ $item['title'] }}</h1>
                <h4>Original Tile: {{ $item['original_title'] }}</h4>
                <div>Nationality: {{ $item['nationality'] }}</div>
                <div>Date: {{ $item['date'] }}</div>
                <div>Vote: {{ $item['vote'] }}</div>
            </div>
        </a>
    @endforeach
@endsection