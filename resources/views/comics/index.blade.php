@extends('layouts.app')

@section('content')
    <section class="jumbotron">
    </section>

    <section class="comics">

        <div class="container">

            <div class="row">

                <div class="col-12">
                    <div class="text-center pt-4 pb-2">
                        <button>
                            <a href="{{ route('comics.create') }}">
                                Add Comic
                            </a>
                        </button>
                    </div>
                </div>

            </div>

            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="pb-4">

                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">

                                <div class="comics_img">
                                    <img class="img-fluid" src="https://picsum.photos/200" alt="">
                                </div>

                                <div class="comics_title">
                                    <h6>
                                        {{ strtoupper($comic->title) }}
                                    </h6>
                                </div>

                            </a>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
@endsection
