@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="" class="control-label">
                                Title
                            </label>
                            <input type="text" name="title" id="" class="form-control" placeholder="Title"
                                value="{{ old('title') }}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">
                                Description
                            </label>
                            <input type="text" name="description" id="" class="form-control"
                                placeholder="Description" value="{{ old('description') }}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">
                                Price
                            </label>
                            <input type="text" name="price" id="" class="form-control" placeholder="Price"
                                value="{{ old('price') }}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">
                                Sale Date
                            </label>
                            <input type="text" name="sale_date" id="" class="form-control"
                                placeholder="Sale Date" value="{{ old('sale_date') }}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">
                                Type
                            </label>
                            <input type="text" name="type" id="" class="form-control" placeholder="Type"
                                value="{{ old('type') }}">
                        </div>
                        <div class="col-12">
                            <label for="" class="control-label">
                                Image
                            </label>
                            <input type="text" name="image" id="" class="form-control" placeholder="Image"
                                value="{{ old('image') }}">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="my-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
