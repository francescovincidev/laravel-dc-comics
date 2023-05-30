@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifica un fumetto</h2>

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>



            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $comic->image }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" min="0.00" max="999.99"
                    step="0.01" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $comic->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">

                    <option @selected($comic->type === 'comic book') value="comic book">Comic Book</option>
                    <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic Novel</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>
@endsection
