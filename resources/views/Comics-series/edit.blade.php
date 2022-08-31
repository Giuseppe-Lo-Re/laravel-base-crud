@extends('layouts.app')

@section('main_content')
<form action="{{ route('comics-series.update', ['comics_series' => $comics->id]) }}" method="post">
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <div>
        <label for="title">Titolo</label> 
        <input type="text" id="title" name="title" value="{{ old('title') ? old('title') : $comics->title }}">
    </div>
    <br>
    <div>
        <label for="description">Descrizione</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $comics->description }}</textarea>
    </div>
    <br>
    <div>
        <label for="thumb">Url immagine</label>
        <input type="text" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comics->thumb }}">
    </div>
    <br>
    <div>
        <label for="price">Prezzo</label>
        <input type="text" id="price" name="price" value="{{ old('price') ? old('price') : $comics->price }}">
    </div>
    <br>
    <div>
        <label for="series">Serie</label>
        <input type="text" id="series" name="series" value="{{ old('series') ? old('series') : $comics->series }}">
    </div>
    <br>
    <div>
        <label for="sale_date">Data Uscita</label>
        <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comics->sale_date }}">
    </div>
    <br>
    <div>
        <label for="type">Tipologia</label>
        <input type="text" id="type" name="type" value="{{ old('type') ? old('type') : $comics->type }}">
    </div>
    <br>
    <button>Salva</button>
</form>
@endsection