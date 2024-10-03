@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="https://picsum.photos/900" alt="">
            </div>
            <div class="col-6">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <label for="" class="control-label">
                                Title
                            </label>
                            <input type="text" name="title" id=""
                                class="form-control @error('title')is-invalid @enderror" placeholder="Title"
                                value="{{ old('title', $comic->title) }}">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">
                                Description
                            </label>
                            <input type="text" name="description" id=""
                                class="form-control @error('description')is-invalid @enderror" placeholder="Description"
                                value="{{ old('description', $comic->description) }}">
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">
                                Price
                            </label>
                            <input type="text" name="price" id=""
                                class="form-control @error('price')is-invalid @enderror" placeholder="Price"
                                value="{{ old('price', $comic->price) }}">
                            @error('price')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">
                                Sale Date
                            </label>
                            <input type="text" name="sale_date" id=""
                                class="form-control @error('sale_date')is-invalid @enderror" placeholder="Sale Date"
                                value="{{ old('sale_date', $comic->sale_date) }}">
                            @error('sale_date')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">
                                Type
                            </label>
                            <input type="text" name="type" id=""
                                class="form-control @error('type')is-invalid @enderror" placeholder="Type"
                                value="{{ old('type', $comic->type) }}">
                            @error('type')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="" class="control-label">
                                Image
                            </label>
                            <input type="text" name="image" id=""
                                class="form-control @error('image')is-invalid @enderror" placeholder="Image"
                                value="{{ old('image', $comic->image) }}">
                            @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <button type="submit" class="my-4 btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
