@extends('layouts.app')

@section('content')
    <section class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">edit</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">

                    <img class="img-fluid" src="https://picsum.photos/900" alt="">

                </div>
                <div class="col-6">

                    <h1>{{ strtoupper($comic['title']) }}</h1>
                    <p>{{ strtoupper($comic['description']) }}</p>
                    <p>{{ strtoupper($comic['sale_date']) }}</p>
                    <p>{{ strtoupper($comic['type']) }}</p>
                    <p>{{ strtoupper($comic['price']) }}</p>

                </div>
            </div>
        </div>

    </section>
@endsection
