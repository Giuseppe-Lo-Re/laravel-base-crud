@extends('layouts.app')

@section('main_content')
    <h1>
        Scopri tutti i nostri Comics:
    </h1>

    @foreach ($comics_array as $comics)

    <div>
        <strong>Cover:</strong> <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}"> <br>
        <strong>Nome:</strong>  {{ $comics->title }} <br>
        <strong>Descrizione:</strong> {{ $comics->description }} <br>
        <strong>Serie:</strong>  {{ $comics->series }} <br>
        <strong>Prezzo:</strong>  $ {{ $comics->price }} <br>
        <strong>data uscita:</strong>  {{ date('d-m-Y', strtotime($comics->sale_date)) }} <br>
    </div>
    <br>
    @endforeach
@endsection