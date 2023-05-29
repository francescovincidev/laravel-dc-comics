@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dati del fumetto {{ $comic->title }}</h2>
        <div class="my-2 text-end">
            <a href="{{ route('comics.index') }}">Torna alla lista fumetti</a>
        </div>
        <img class="w-50" src="{{ $comic->image }}" alt="">
        <ul class="list-group">

            <li class="list-group-item">
                <strong>Prezzo: </strong> {{ $comic->price }}
            </li>
            <li class="list-group-item">
                <strong>Serie: </strong> {{ $comic->series }}
            </li>
            <li class="list-group-item">
                <strong>Data: </strong> {{ $comic->sale_date }}
            </li>
            <li class="list-group-item">
                <strong>Tipo: </strong> {{ $comic->type }}
            </li>
        </ul>
        <p>
            {{ $comic->description }}
        </p>
    </div>
@endsection
