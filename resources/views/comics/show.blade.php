@extends('layouts.app')

@section('content')
    <section class="jumbotron">
    </section>

    <section class="py-5">

        <div class="container">

            <div class="row">
                <div class="col-4">

                    <img class="img-fluid" src="https://picsum.photos/900" alt="">

                </div>
                <div class="col-6">

                    <h1>{{ strtoupper($comic['title']) }}</h1>
                    <p>Description: {{ strtoupper($comic['description']) }}</p>
                    <p>Date: {{ strtoupper($comic['sale_date']) }}</p>
                    <p>Type: {{ strtoupper($comic['type']) }}</p>
                    <p>Price: {{ strtoupper($comic['price']) }}</p>

                </div>
                <div class="col-2">
                    <div class="d-flex py-2 justify-content-end">

                        <button class="me-2 btn btn-warning">
                            <a class="text-decoration-none text-dark"
                                href="{{ route('comics.edit', ['comic' => $comic->id]) }}">edit</a>
                        </button>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete_comic btn btn-danger text-dark">
                                delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @include('comics.partials.modal_delete')
@endsection
