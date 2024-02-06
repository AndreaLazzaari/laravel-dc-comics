@extends('layouts.app')

@section('main-content')

    <section class="comic">
        <div class="container">
            <div class="row">
                <div class="row mb-3 justify-content-center">
                    <div class="col-7 p-3">
                        <div class="card p-4 text-center">
                            <h1>
                                {{ $comic['title'] }}
                            </h1>
                            <p>
                                Serie: {{ $comic['series'] }}
                            </p>
                            <p>
                                Tipo: {{ $comic['type'] }}
                            </p>
                            <p>
                                Prezzo: {{ $comic['price'] }}
                            </p>
                            <div class="card-image">
                                <img class="w-50" src="{{  $comic['thumb'] }}" alt="{{ $comic['title'] }}'s picture">
                            </div>
                            <p>
                                Descrizione fumetto: {{ $comic['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection