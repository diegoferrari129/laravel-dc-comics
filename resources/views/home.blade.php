@extends('layouts.app')

@section('content')
    <section class="jumbotron">
    </section>

    <section class="comics">

        <div class="container">
            <div class="row">

                @foreach ($comics as $comic)
                    <div class="col-2">

                        <div class="comics_img">
                            <img class="img-fluid" src="https://picsum.photos/200" alt="">
                        </div>

                        <div class="comics_title">
                            <h6>
                                {{ strtoupper($comic->title) }}
                                {{ strtoupper($comic->description) }}
                                {{ strtoupper($comic->price) }}
                                {{ strtoupper($comic->sale_date) }}
                                {{ strtoupper($comic->type) }}
                            </h6>
                        </div>

                    </div>
                @endforeach

                <div class="comics_btn">
                    <button>
                        LOAD MORE
                    </button>
                </div>

            </div>
        </div>

    </section>
@endsection
