@extends('layouts.app')

@section('main_content')
    
<h1>{{ $comics->title }}</h1>
        
<div>
    <strong>Cover:</strong> <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
</div>

<div>
    <strong>Descrizione:</strong> {{ $comics->description }}
</div>

<div>
    <strong>Serie:</strong> {{ $comics->series }}
</div>

<div>
    <strong>Prezzo:</strong> ${{ $comics->price }}
</div>

<div>
    <strong>Data uscita:</strong> {{ $comics->sale_date }}
</div>

<div>
    <strong>Tipologia:</strong> {{ $comics->type }}
</div>

@endsection