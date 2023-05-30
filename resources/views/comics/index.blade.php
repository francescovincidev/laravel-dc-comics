@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>I nostri fumetti</h2>
        <div class="my-2 text-end">
            <a href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>

                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>

                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td class="d-flex">
                            <a class="btn btn-success m-1" href="{{ route('comics.show', $comic->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-warning m-1" href="{{ route('comics.edit', $comic->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal"
                                data-bs-target="#myModal{{ $comic->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <!-- The Modal -->
                            <div class="modal fade" id="myModal{{ $comic->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title{{ $comic->id }}">Sei sicuro di voler eliminare il
                                                fumetto
                                                {{ $comic->title }} ?</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Una volta eliminato verrà rimosso dal database
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}"
                                                method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    ELIMINA
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
