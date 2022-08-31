@extends('layouts.app')

@section('main_content')
    <h1>
        Scopri tutti i nostri Comics:
    </h1>

    @foreach ($comics_array as $comics)

    <div>
        <strong>Cover:</strong> <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}"> <br>
        <strong>Titolo:</strong>  {{ $comics->title }} <br>
        <a href="{{ route('comics-series.show', ['comics_series' => $comics->id]) }}">dettagli prodotto</a> <br>
        <a href="{{ route('comics-series.edit', ['comics_series' => $comics->id]) }}">modifica prodotto</a>
    </div>
    <br>

    <div>
        <form action="{{ route('comics-series.destroy', ['comics_series' => $comics->id]) }}" method='post'>
            @csrf
            @method('DELETE')
            
            <input type="submit" 
                   value="elimina prodotto" 
                   onClick="return confirm('Stai per eliminare il prodotto. Sei sicuro?')">
        </form>
    </div>
    <br>
    @endforeach
@endsection