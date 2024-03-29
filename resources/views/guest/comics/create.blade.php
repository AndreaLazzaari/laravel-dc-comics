@extends('layouts.app')

@section('main-content')
    <section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                    Aggiungi un nuovo fumetto:
                </h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Titolo del fumetto:
                        </label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title')}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie del fumetto:</label>
                        <input type="text" name="series" id="series" class="form-control" value="{{ old('series')}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ old('price')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Piccola descrizione:</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description')}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita:</label>
                        <input type="text" name="sale_date" id="sale_date" class="form-control" value="{{ old('sale_date')}}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo di fumetto:</label>
                        <input type="text" name="type" id="type" class="form-control" value="{{ old('type')}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">URL immagine</label>
                        <input type="text" name="thumb" id="thumb" class="form-control" value="{{ old('thumb')}}">
                    </div>


                    <button type="submit" class="btn btn-primary">Aggiungi un nuovo fumetto</button>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>
@endsection