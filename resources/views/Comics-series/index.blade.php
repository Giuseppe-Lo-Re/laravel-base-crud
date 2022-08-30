@extends('layouts.app')

@section('main_content')
    <h1>
        Scopri tutti i nostri Comics:
    </h1>

    @foreach ($comics_array as $comics)

    <div>
        <strong>Cover:</strong> <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}"> <br>
        <strong>Titolo:</strong>  {{ $comics->title }} <br>
        <a href="{{ route('comics-series.show', ['comics_series' => $comics->id]) }}">dettagli prodotto</a>
    </div>
    <br>
    @endforeach
@endsection