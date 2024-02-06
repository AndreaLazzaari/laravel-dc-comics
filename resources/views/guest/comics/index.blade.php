@extends('layouts.app')

@section('main-content')
    <section class="comics">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)

                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $comic['series']}}
                                </h5>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection